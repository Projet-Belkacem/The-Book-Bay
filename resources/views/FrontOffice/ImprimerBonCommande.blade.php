@extends('FrontOffice._layout_frontOffice')

@section('styles')
@endsection

@section('main_content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <u>
                    <h1>
                        Imprimer le bon de commande
                    </h1>
                </u>
            </div>
            <div class="col-md-12 text-right mb-2">
                <a href="#;" id="btnImpression" class="btn btn-sm btn-success">
                    Imprimer
                </a>
            </div>
            <div class="col-md-12">
                <table class="andro_responsive-table" id="table-commande">
                    <thead>
                        <tr>
                            <th>Ouvrage</th>
                            <th>Prix</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lignes_commande as $ligne)
                        @php
                        $ouvrage = $ligne->ouvrage
                        @endphp
                        <tr data-produit="{{ $ouvrage->id }}">
                            <td data-title="Ouvrage">
                                <div class="andro_cart-product-wrapper">
                                    <img src="{{ asset($ouvrage->chemin_photo_couverture) }}" alt=".."
                                        style="height:100px;width:70px;">
                                    <div class="andro_cart-product-body">
                                        <h6>
                                            <a href="#;">
                                                {{ $ouvrage->titre }}
                                            </a>
                                        </h6>
                                        <p>
                                            {{ $ligne->quantite }}
                                            Piéces
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td data-title="Prix">
                                <strong class="span_prix_element">
                                    {{ $ouvrage->prix }}
                                </strong>
                            </td>
                            <td data-title="Montant">
                                <strong>
                                    <span class="span_total_montant_element">
                                        {{ $ligne->quantite *  $ouvrage->prix }}
                                    </span>
                                    (Dhs)
                                </strong>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/plugins/prinThis.js') }}"></script>
<script src="{{ asset('assets/js/FrontOffice/ImprimerBonCommande.js') }}"></script>
@endsection