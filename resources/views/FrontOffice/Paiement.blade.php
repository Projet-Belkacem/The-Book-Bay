@extends('FrontOffice._layout_frontOffice')

@section('styles')
@endsection

@section('main_content')
<!-- Subheader Start -->
<div class="andro_subheader pattern-bg primary-bg">
    <div class="container">
        <div class="andro_subheader-inner">
            <h1>Paiement</h1>
            <small>
                <img src="{{ asset('assets/img/norton_secure.png') }}" alt="." style="width: 200px;">
            </small>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100" preserveAspectRatio="none">
        <circle fill="white" cx="0" cy="100" r="100"></circle>
        <circle fill="white" cx="200" cy="100" r="100"></circle>
    </svg>
</div>
<!-- Subheader End -->
<!-- Checkout Start -->
<div class="section">
    <div class="container">
        <form method="post" action="{{ route('valider_commande_paiement') }}">
            @csrf
            <input type="hidden" name="commande" value="{{ $produits->first()->id_commande }}">
            <div class="row">
                <div class="col-xl-7">
                    <!-- Coupon Code -->
                    <div class="andro_notice">
                        <p>
                            Aves-vous un code PROMO ?
                            <a href="#">
                                Clickez pour Appliquer !!
                            </a>
                        </p>
                    </div>
                    <div class="andro_notice-content">
                        <p>
                            Les codes PROMO permettent un bonne réduction du prix totale (TTC) de la commande.
                            Si vous en possédez un,
                            il est temps de le soumettre !
                        </p>
                        <div class="input-group">
                            <input type="text" class="form-control font-weight-bold" placeholder="Code PROMO">
                            <div class="input-group-append">
                                <button class="andro_btn-custom shadow-none" type="button">
                                    Appliquer !
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Buyer Info Start -->
                    <h4>
                        Info de Livraison
                    </h4>
                    <div class="row">
                        <div class="form-group col-xl-6">
                            <label>
                                Prénom
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" placeholder="Prénom" name="prenom" class="form-control font-weight-bold"
                                value="{{ Auth::user()->prenom }}" required>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>
                                Nom
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" placeholder="Nom" name="nom" class="form-control font-weight-bold"
                                value="{{ Auth::user()->nom }}" required>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>
                                Ville
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" placeholder="Ville" name="ville" class="form-control font-weight-bold"
                                required>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>
                                Adresse
                            </label>
                            <textarea name="adresse" class="form-control font-weight-bold" placeholder="Adresse"
                                rows="4" required>{{ Auth::user()->adresse }}</textarea>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>
                                N&deg; de Télephone
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" placeholder="Télephone" name="telephone"
                                class="form-control font-weight-bold" value="{{ Auth::user()->phone }}" required>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>
                                Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" placeholder="Adresse Email" name="email"
                                class="form-control font-weight-bold" value="{{ Auth::user()->email }}" required>
                        </div>
                        <div class="form-group col-xl-12 mb-0">
                            <label>
                                Remarques (facultatif)
                            </label>
                            <textarea name="remarques" rows="5" class="form-control font-weight-bold"
                                placeholder="(facultatif)"></textarea>
                        </div>
                    </div>
                    <!-- Buyer Info End -->
                </div>
                <div class="col-xl-5 checkout-billing border">
                    <!-- Order Details Start -->
                    <table class="andro_responsive-table">
                        <thead>
                            <tr>
                                <th>Produits</th>
                                <th>Quantité</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <span class="d-none">{{ $somme = 0 }}</span>
                            @foreach ($produits as $produit)
                            <tr>
                                <td data-title="Product">
                                    <div class="andro_cart-product-wrapper">
                                        <div class="andro_cart-product-body">
                                            <h6>
                                                <a href="#">
                                                    {{ $produit->titre }}
                                                </a>
                                            </h6>
                                            <p>
                                                {{ $produit->quantite }}
                                                Piéce(s)
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Quantity">
                                    {{ $produit->quantite }}
                                </td>
                                <td data-title="Total">
                                    <strong>
                                        {{ $produit->quantite * $produit->prix }}
                                    </strong>
                                    <span class="d-none">
                                        {!! $somme += $produit->quantite * $produit->prix !!}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="total">
                                <td colspan="2">
                                    <h6 class="mb-0">
                                        Total
                                    </h6>
                                </td>
                                <td>
                                    <strong>
                                        {{ $somme }}
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <label>
                            N&deg; de Carte
                        </label>
                        <input type="text" class="form-control font-weight-bold" name="master-number"
                            placeholder="Card Number">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <label>Date d'expiration</label>
                            <input type="text" class="form-control font-weight-bold" name="master-expiry"
                                placeholder="Date d'expiration (MM/YY)">
                        </div>
                        <div class="col-xl-6 form-group">
                            <label>CVV*</label>
                            <input type="number" class="form-control font-weight-bold" name="master-cvv"
                                placeholder="CVV">
                        </div>
                    </div>
                    <p class="small">Vos données personnelles seront utilisées pour traiter votre commande, soutenir
                        votre expérience sur ce site Web et à d'autres fins décrites dans nos
                        <a class="btn-link" href="#">
                            Termes d'utilisation.
                        </a>
                    </p>
                    <button type="submit" class="andro_btn-custom primary btn-block">Confirmer L'Achat</button>
                    <!-- Order Details End -->
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Checkout End -->
@endsection

@section('scripts')
@endsection