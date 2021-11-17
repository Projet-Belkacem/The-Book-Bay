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
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Facebook"> <i
                                class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Twitter"> <i
                                class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#" data-toggle="tooltip" title="" data-original-title="Linkedin"> <i
                                class="fab fa-linkedin-in"></i> </a> </li>
                </ul>
            </div>
        </div>
        <!-- Share Wishlist End -->
    </div>
</div>
<!--  Wishlist End -->
@include('FrontOffice._abonnementNouveaute')
@endsection