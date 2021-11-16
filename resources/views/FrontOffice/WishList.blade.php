@extends('FrontOffice._layout_frontOffice')

@section('main_content')
<!-- Wishlist Start -->
<div class="section">
    <div class="container">
        <!-- Wishlist Table Start -->
        <table class="andro_responsive-table">
            <thead>
                <tr>
                    <th class="remove-item"></th>
                    <th>Ouvrage</th>
                    <th>Prix</th>
                    <th>Disponibilité</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="remove">
                        <button type="button" class="close-btn close-danger remove-from-cart">
                            <span></span>
                            <span></span>
                        </button>
                    </td>
                    <td data-title="Product">
                        <div class="andro_cart-product-wrapper">
                            <img src="assets/img/products/1.png" alt="prod1">
                            <div class="andro_cart-product-body">
                                <h6> <a href="#">Kiwi</a> </h6>
                                <p>2 Piéces</p>
                            </div>
                        </div>
                    </td>
                    <td data-title="Price"> <strong>12.99 (Dhs)</strong> </td>
                    <td data-title="Availability">
                        <span class="andro_product-stock instock">Disponible</span>
                    </td>
                    <td data-title="Total"> <strong>12.99 (Dhs)</strong> </td>
                    <td data-title="Actions"> <a href="#" class="andro_btn-custom btn-sm shadow-none">Au Panier !!</a>
                    </td>
                </tr>
                <tr>
                    <td class="remove">
                        <button type="button" class="close-btn close-danger remove-from-cart">
                            <span></span>
                            <span></span>
                        </button>
                    </td>
                    <td data-title="Product">
                        <div class="andro_cart-product-wrapper">
                            <img src="assets/img/products/5.png" alt="prod1">
                            <div class="andro_cart-product-body">
                                <h6> <a href="#">Livre historique</a> </h6>
                                <p>1 Piéces</p>
                            </div>
                        </div>
                    </td>
                    <td data-title="Price"> <strong>9.99 (Dhs)</strong> </td>
                    <td data-title="Availability">
                        <span class="andro_product-stock instock">Disponible</span>
                    </td>
                    <td data-title="Total"> <strong>9.99 (Dhs)</strong> </td>
                    <td data-title="Actions"> <a href="#" class="andro_btn-custom btn-sm shadow-none">Au Panier !!</a>
                    </td>
                </tr>
                <tr>
                    <td class="remove">
                        <button type="button" class="close-btn close-danger remove-from-cart">
                            <span></span>
                            <span></span>
                        </button>
                    </td>
                    <td data-title="Product">
                        <div class="andro_cart-product-wrapper">
                            <img src="assets/img/products/4.png" alt="prod1">
                            <div class="andro_cart-product-body">
                                <h6> <a href="#">Santé & Beauté </a> </h6>
                                <p>3 Piéces</p>
                            </div>
                        </div>
                    </td>
                    <td data-title="Price"> <strong>13.99 (Dhs)</strong> </td>
                    <td data-title="Availability">
                        <span class="andro_product-stock outofstock">En Rupture</span>
                    </td>
                    <td data-title="Total"> <strong>13.99 (Dhs)</strong> </td>
                    <td data-title="Actions"> <a href="#" class="andro_btn-custom btn-sm shadow-none">Au Panier !!</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Wishlist Table End -->
        <!-- Share Wishlist Start -->
        <div class="text-center">
            <h5>Suivez-nous pour ne rater aucune nouveauté !</h5>
            <div class="andro_post-share">
                <ul class="andro_sm justify-content-center">
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Share on Facebook"> <i
                                class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Share on Twitter"> <i
                                class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Share on Linkedin"> <i
                                class="fab fa-linkedin-in"></i> </a> </li>
                </ul>
            </div>
        </div>
        <!-- Share Wishlist End -->
    </div>
</div>
<!--  Wishlist End -->
<div class="section light-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-lg-30 d-block d-lg-flex align-items-center text-center text-lg-left">
                <i class="flaticon-email-1 mr-0 mr-lg-4 fs-40"></i>
                <div class="andro_newsletter-content">
                    <h4 class="mb-0">Gardons contact</h4>
                    <p class="mb-0">Inscrivez-vous à notre boite d'envoie !</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Votre adresse email">
                        <div class="input-group-append">
                            <button class="andro_btn-custom" type="button">s'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection