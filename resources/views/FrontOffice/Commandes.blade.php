@extends('FrontOffice._layout_frontOffice')

@section('styles')
@endsection

@section('main_content')
{{-- @dump(
$commandes
) --}}
<div class="section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Mes Commandes
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripped">
                                <thead>
                                    <tr class="text-center">
                                        <th>
                                            Réference
                                        </th>
                                        <th>
                                            Date début de la commande
                                        </th>
                                        <th>
                                            Derniére date d'interraction
                                        </th>
                                        <th>
                                            Etat
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($commandes as $commande)
                                    <tr class="text-center">
                                        <td>
                                            CMD-REF-CR{{ $commande->id }}
                                        </td>
                                        <td>
                                            {{ $commande->date_debut_commande }}
                                        </td>
                                        <td>
                                            {{ $commande->LigneCommandes->last()->date_ajout_panier }}
                                        </td>
                                        <td>
                                            {{ $commande->etat }}
                                        </td>
                                        <td>
                                            @if ($commande->etat == "EN_ATTENTE")
                                            <a class="btn btn-sm btn-outline-success" href="{{ route('mon_panier') }}">
                                                Valider
                                            </a>
                                            @else
                                            <a class="btn btn-sm btn-outline-info" href="{{ route('mon_panier') }}">
                                                Imprimer
                                                <br>
                                                Bon de commande
                                            </a>
                                            @endif
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


@endsection

@section('scripts')
@endsection