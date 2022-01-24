@extends('BackOffice._layout_backOffice')

@section('styles')
@endsection

@section('content')
<h2>
    <u>
        Gestion des Commandes
    </u>
</h2>
@if ($errors->any())
<div class="alert alert-danger mt-2">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @endforeach
    </ul>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-stripped w-100">
                <thead class="text-center">
                    <tr>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Etat</th>
                        <th>Détails</th>
                        <th>Total</th>
                        <th>Document</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($commandes as $commande)
                    <i class="d-none">
                        {{ $somme = 0 }}
                    </i>
                    <tr>
                        <td>
                            {{ $commande->date_debut_commande }}
                        </td>
                        <td>
                            {{ $commande->ligneCommandes->first()->user->prenom }}
                            {{ $commande->ligneCommandes->first()->user->nom }}
                        </td>
                        <td>
                            @switch( $commande->etat )
                            @case("PAIEMENT")
                            <span class="badge badge-primary">
                                PAIEMENT
                            </span>
                            @break
                            @case("EN_ATTENTE")
                            <span class="badge badge-info">
                                EN ATTENTE
                            </span>
                            @break
                            @case("EN_COURS")
                            <span class="badge badge-success">
                                EN COURS
                            </span>
                            @break
                            @endswitch
                        </td>
                        <td>
                            <ul>
                                @foreach ($commande->ligneCommandes as $ligne)
                                <li>
                                    {{ $ligne->ouvrage->titre }} x {{ $ligne->quantite }}
                                    -
                                    <small>
                                        ({{ $ligne->montant }} Dhs)
                                    </small>
                                    <i class="d-none">
                                        {!! $somme += $ligne->montant !!}
                                    </i>
                                </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            {{ $somme }} Dhs
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection