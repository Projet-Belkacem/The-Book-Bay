<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()) {
            $LAYOUT_MONTANT_TOTAL_COMMANDE = "BD";
            View::share('montant_total_commande', $LAYOUT_MONTANT_TOTAL_COMMANDE);
        } else {
            view()->composer('*', function ($view) {
                $LAYOUT_MONTANT_TOTAL_COMMANDE = 0;
                $panier = session("panier");
                foreach ($panier[0] as $id_produit => $obj) {
                    $LAYOUT_MONTANT_TOTAL_COMMANDE += $obj["detail"]->prix * $obj["qtt"];
                }
                $view
                    ->with("LAYOUT_MONTANT_TOTAL_COMMANDE", $LAYOUT_MONTANT_TOTAL_COMMANDE)
                    ->with("LAYOUT_NOMBRE_TOTAL_ELEMENT_COMMANDE", count($panier[0]));
            });
        }
    }
}
