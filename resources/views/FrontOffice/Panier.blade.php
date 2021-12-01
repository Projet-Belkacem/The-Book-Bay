@extends('FrontOffice._layout_frontOffice')

@section('main_content')
<!--Cart Start -->
<div class="section">
    <div class="container">
        <!-- Cart Table Start -->
        <table class="andro_responsive-table">
            <thead>
                <tr>
                    <th class="remove-item"></th>
                    <th>Ouvrage</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ouvrages as $id => $obj)
                <tr>
                    <td class="remove">
                        <button type="button" class="close-btn close-danger remove-from-cart" data-toggle="modal"
                            data-target="#_modal_ConfirmationSupression"
                            data-url="{{ route('supprimer_panier', ['id_produit'=> $obj['detail']->id ]) }}">
                            <span></span>
                            <span></span>
                        </button>
                    </td>
                    <td data-title="Product">
                        <div class="andro_cart-product-wrapper">
                            <img src="{{ asset($obj['detail']->chemin_photo_couverture) }}" alt=".."
                                style="height:100px;width:70px;">
                            <div class="andro_cart-product-body">
                                <h6>
                                    <a href="#;">
                                        {{ $obj["detail"]->titre }}
                                    </a>
                                </h6>
                                <p>
                                    {{ $obj["qtt"] }}
                                    Piéces
                                </p>
                            </div>
                        </div>
                    </td>
                    <td data-title="Price">
                        <strong class="span_prix_element">
                            {{ $obj["detail"]->prix }}
                        </strong>
                    </td>
                    <td class="quantity" data-title="Quantity">
                        <div class="input-group">
                            <input type="number" min="1" class="qty form-control input_qtt_panier"
                                value="{{ $obj['qtt'] }}" required>
                            <div class="input-group-append" data-toggle="tooltip" title="Confirmer"
                                style="display: none;">
                                <button type="button" class="btn btn-sm btn-primary btn_maj_qtt_ouvrage"
                                    data-url="{{ route('ajout_panier', ['id_produit'=>$id, 'quantite'=> 'QTT']) }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td data-title="Total">
                        <strong>
                            <span class="span_total_montant_element">
                                {{ $obj["qtt"] *  $obj["detail"]->prix }}
                            </span>
                            (Dhs)
                        </strong>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Cart Table End -->
        <!-- Coupon Code Start -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="form-group mb-0">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control" placeholder="Entrez votre code Promo !"
                            aria-label="Code Promo">
                        <div class="input-group-append">
                            <button class="andro_btn-custom shadow-none" type="button">
                                Appliquer !
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Coupon Code End -->
    </div>
</div>
<!-- Cart End -->
<!-- Cart form Start -->
<div class="section pt-0">
    <div class="container">
        <div class="row andro_cart-form">
            <div class="col-lg-6 andro_upsells">
                <div class="section-title flex-title">
                    <h4 class="title">Les plus vendus</h4>
                    <div class="andro_arrows">
                        <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
                        <i class="fa fa-arrow-right slick-arrow slider-next"></i>
                    </div>
                </div>
                <!-- Upsells Start -->
                <div class="andro_upsells-slider">
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="#;"><img src="assets/img/products/5.png" alt="product"></a>
                        </div>
                        <div class="andro_product-body">
                            <div class="andro_rating-wrapper">
                                <div class="andro_rating">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </div>
                                <span>5 étoile(s)</span>
                            </div>
                            <h5 class="andro_product-title"> <a href="#;">Michell Obama </a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>
                                Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.
                            </p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#;" class="andro_btn-custom primary">
                                    Ajouter au panier !
                                </a>
                                <a href="#;" class="andro_btn-custom light">
                                    Détail
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="#;"><img src="assets/img/products/14.png" alt="product"></a>
                        </div>
                        <div class="andro_product-body">
                            <div class="andro_rating-wrapper">
                                <div class="andro_rating">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>4 étoile(s)</span>
                            </div>
                            <h5 class="andro_product-title"> <a href="#;">Allegiant </a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.</p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#;" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#;" class="andro_btn-custom light">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="#;"><img src="assets/img/products/12.png" alt="product"></a>
                        </div>
                        <div class="andro_product-body">
                            <div class="andro_rating-wrapper">
                                <div class="andro_rating">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </div>
                                <span>5 étoile(s)</span>
                            </div>
                            <h5 class="andro_product-title"> <a href="#;">Fiction</a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.</p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#;" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#;" class="andro_btn-custom light">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="#;"><img src="assets/img/products/6.png" alt="product"></a>
                        </div>
                        <div class="andro_product-body">
                            <div class="andro_rating-wrapper">
                                <div class="andro_rating">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                </div>
                                <span>5 étoile(s)</span>
                            </div>
                            <h5 class="andro_product-title"> <a href="#;">The Book of Love </a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.</p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#;" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#;" class="andro_btn-custom light">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                </div>
                <!-- Upsells End -->
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    <h4 class="title">Facturation</h4>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>
                                Somme
                            </th>
                            <td>
                                @guest
                                {{ $LAYOUT_MONTANT_TOTAL_COMMANDE }}
                                (Dhs)
                                @endguest
                                @auth
                                {{ $AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE }}
                                (Dhs)
                                @endauth
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Tax
                            </th>
                            <td>
                                @guest
                                {{ ($LAYOUT_MONTANT_TOTAL_COMMANDE * 11)/100 }}
                                @endguest
                                @auth
                                {{ ($AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE * 11)/100 }}
                                @endauth
                                (Dhs)
                                <br>
                                <span class="small">
                                    <u>
                                        TVA : 11%
                                    </u>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Total
                            </th>
                            <td>
                                <b>
                                    <span id="span_total">
                                        @guest
                                        {{
                                        round(
                                                (($LAYOUT_MONTANT_TOTAL_COMMANDE * 11)/100) + $LAYOUT_MONTANT_TOTAL_COMMANDE,
                                                2
                                            ) 
                                        }}
                                        @endguest
                                        @auth
                                        {{
                                        round(
                                                (($AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE * 11)/100) + $AUTH_LAYOUT_MONTANT_TOTAL_COMMANDE,
                                                2
                                            ) 
                                        }}
                                        @endauth
                                    </span>
                                    (Dhs)
                                </b>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="{{ route('valider_commande_panier') }}" method="post" id="form_paiement">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block">
                        Procéder au paiement
                        <i class="fas fa-chevron-circle-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('FrontOffice._modal_ConfirmationSupression')
@endsection

@section('scripts')
<script src="{{ asset('assets/js/FrontOffice/Panier.js') }}"></script>
@endsection