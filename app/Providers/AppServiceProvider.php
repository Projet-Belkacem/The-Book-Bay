<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (auth()->check()) {
                $AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE =
                    DB::table('users')
                    ->join("ligne_commandes", "users.id", "=", "ligne_commandes.user_id")
                    ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
                    ->where("commandes.etat", "=", "EN_ATTENTE")
                    ->where("ligne_commandes.user_id", "=", auth()->id())
                    ->sum("ligne_commandes.montant");

                $AUTH_LAYOUT_NOMBRE_TOTAL_ELEMENT_COMMANDE =  DB::table('users')
                    ->join("ligne_commandes", "users.id", "=", "ligne_commandes.user_id")
                    ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
                    ->where("commandes.etat", "=", "EN_ATTENTE")
                    ->where("ligne_commandes.user_id", "=", auth()->id())
                    ->count();

                $view
                    ->with("AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE", $AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE)
                    ->with("AUTH_LAYOUT_NOMBRE_TOTAL_ELEMENT_COMMANDE", $AUTH_LAYOUT_NOMBRE_TOTAL_ELEMENT_COMMANDE);
            } else {
                $LAYOUT_MONTANT_TOTAL_COMMANDE = 0;
                $panier = session("panier");
                foreach ($panier[0] as $id_produit => $obj) {
                    $LAYOUT_MONTANT_TOTAL_COMMANDE += $obj["detail"]->prix * $obj["qtt"];
                }
                $view
                    ->with("LAYOUT_MONTANT_TOTAL_COMMANDE", $LAYOUT_MONTANT_TOTAL_COMMANDE)
                    ->with("LAYOUT_NOMBRE_TOTAL_ELEMENT_COMMANDE", count($panier[0]));
            }
        });
    }
}
