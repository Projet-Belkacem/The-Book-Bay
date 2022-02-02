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
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Traitement par contact clientel
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Client</th>
                                        <th>Email</th>
                                        <th>Sujet</th>
                                        <th>Remarque</th>
                                        <th>Bon de commande</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr class="text-center">
                                        <td>
                                            {{ $contact->prenom }}
                                            {{ $contact->nom }}
                                        </td>
                                        <td>
                                            {{ $contact->email }}
                                        </td>
                                        <td>
                                            {{ $contact->sujet }}
                                        </td>
                                        <td>
                                            {{ $contact->message }}
                                        </td>
                                        <td>
                                            <a href="{{ asset($contact->bon_commande) }}" class="btn btn-info" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Traitement par commandes
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripped w-100">
                                <thead class="text-center">
                                    <tr>
                                        <th>Actions</th>
                                        <th>Ref</th>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Etat</th>
                                        <th>Détails</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($commandes as $commande)
                                    <i class="d-none">
                                        {{ $somme = 0 }}
                                    </i>
                                    <tr>
                                        <td style="font-size: 20px;">
                                            @if ($commande->etat == "PAIEMENT")
                                            <a href="#;" class="text-success" data-toggle="modal" title="Livrer"
                                                data-target="#livraison-commande-{{ $commande->id }}">
                                                <i class="fa fa-archive" aria-hidden="true"></i>
                                            </a>
                                            |
                                            <a href="#;" class="text-danger" data-toggle="modal" title="Annuler"
                                                data-target="#annulation-commande-{{ $commande->id }}">
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </a>
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>
                                            #CMD-REF-CR{{ $commande->id }}
                                        </td>
                                        <td>
                                            {{ $commande->date_debut_commande }}
                                        </td>
                                        <td>
                                            #MUID{{ $commande->ligneCommandes->first()->user->id }}
                                            <br>
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
                                            <span class="badge badge-warning">
                                                EN COURS
                                            </span>
                                            @break
                                            @case("LIVRAISON")
                                            <span class="badge badge-success">
                                                LIVRAISON
                                            </span>
                                            @break
                                            @case("ANNULATION")
                                            <span class="badge badge-danger">
                                                ANNULATION
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
            </div>
        </div>
    </div>
</div>

@foreach ($commandes as $commande)
@include('BackOffice._modalLivraisonCommande')
@include('BackOffice._modalAnnulationCommande')
@endforeach

@endsection

@section('scripts')
<script src="{{ asset('assets/js/BackOffice/gestion_commandes.js') }}"></script>
@endsection