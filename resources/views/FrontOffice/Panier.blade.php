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
                                    <a href="#">
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
                        <strong>
                            {{ $obj["detail"]->prix }}
                        </strong>
                    </td>
                    <td class="quantity" data-title="Quantity">
                        <input type="number" class="qty form-control" value="{{ $obj['qtt'] }}">
                    </td>
                    <td data-title="Total">
                        <strong>
                            {{ $obj["qtt"] *  $obj["detail"]->prix }}
                            (Dhs)
                        </strong>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Cart Table End -->
        <!-- Coupon Code Start -->
        <div class="row">
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
                            <a href="product-single.html"><img src="assets/img/products/5.png" alt="product"></a>
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
                            <h5 class="andro_product-title"> <a href="product-single.html">Michell Obama </a> </h5>
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
                                <a href="#" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#" class="andro_btn-custom light">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="product-single.html"><img src="assets/img/products/14.png" alt="product"></a>
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
                            <h5 class="andro_product-title"> <a href="product-single.html">Allegiant </a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.</p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#" class="andro_btn-custom light">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="product-single.html"><img src="assets/img/products/12.png" alt="product"></a>
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
                            <h5 class="andro_product-title"> <a href="product-single.html">Fiction</a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.</p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#" class="andro_btn-custom light">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="andro_product andro_product-list andro_product-has-controls andro_product-has-buttons">
                        <div class="andro_product-thumb">
                            <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
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
                            <h5 class="andro_product-title"> <a href="product-single.html">The Book of Love </a> </h5>
                            <div class="andro_product-price">
                                <span>11 (Dhs)</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus.</p>
                        </div>
                        <div class="andro_product-footer">
                            <div class="andro_product-buttons">
                                <a href="#" class="andro_btn-custom primary">Ajouter au panier !</a>
                                <a href="#" class="andro_btn-custom light">Détail</a>
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
                                90.99 (Dhs)
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Tax
                            </th>
                            <td>
                                9.99 (Dhs) <span class="small">(11%)</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Total
                            </th>
                            <td>
                                <b>99.99 (Dhs)</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="andro_btn-custom primary btn-block">
                    Procéder au paiement
                </a>
            </div>
        </div>
    </div>
</div>
@include('FrontOffice._modal_ConfirmationSupression')
@endsection

@section('scripts')
<script>
    $('#_modal_ConfirmationSupression').on('show.bs.modal', function (event) {
        ligne_selection = $(event.relatedTarget).parents("tr");
        $(this).find('#btn_confirm_suppression').attr("data-url", $(event.relatedTarget).data('url'));
    })
    $("#btn_confirm_suppression").click(function () {
        var url = $(this).data('url')
        $.post(url, function (response) {
            console.log(response)
        }).done(function () {
            $(ligne_selection).remove();
        });
        $(this).parents("#_modal_ConfirmationSupression").modal('hide');
    })

</script>
@endsection
