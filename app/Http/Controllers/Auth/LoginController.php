<?php

namespace App\Http\Controllers\Auth;

use App\Commande;
use App\Http\Controllers\Controller;
use App\LigneCommande;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin_home');
            } else {
                $panier = session("panier");
                $commande_en_attente_du_client =
                    DB::table('users')
                    ->join("ligne_commandes", "users.id", "=", "ligne_commandes.user_id")
                    ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
                    ->select("commandes.id")
                    ->where("commandes.etat", "=", "EN_ATTENTE")
                    ->where("ligne_commandes.user_id", "=", auth()->id())
                    ->get();
                $id_commande = $commande_en_attente_du_client->count() != 0 ?
                    $commande_en_attente_du_client[0]->id :
                    Commande::insertGetId([
                        "etat" => "EN_ATTENTE",
                        "date_debut_commande" => Carbon::now()
                    ]);
                foreach ($panier[0] as $id_produit => $obj) {
                    LigneCommande::create([
                        "ouvrage_id" => $id_produit,
                        "user_id" => auth()->id(),
                        "date_ajout_panier" => Carbon::now(),
                        "quantite" => $obj["qtt"],
                        "montant" => $obj["qtt"] * $obj["detail"]->prix,
                        "commande_id" => $id_commande
                    ])->save();
                }
                return redirect(
                    session("url.intended")
                );
            }
        } else {
            return redirect()
                ->route('login')
                ->with('error', "l'email ou/et le mot de passe est incorrect.");
        }
    }
}
