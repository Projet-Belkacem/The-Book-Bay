@extends('FrontOffice._layout_frontOffice')

@section('main_content')
<!-- Products Start -->
<div class="section">
    <div class="andro_section-fw">
        <div class="row">
            <div class="col-lg-9">
                <!-- Product Count & Orderby Start -->
                <div class="andro_shop-global">
                    <p>Résultat : <b>12</b> Ouvrage(s) </p>
                    <form method="post">
                        <select class="form-control" name="orderby">
                            <option value="default">Trie par default</option>
                            <option value="latest">Sortis derniérement</option>
                            <option value="price-down">Prix: croissant</option>
                            <option value="price-up">Prix: décroissant</option>
                            <option value="popularity">Popularité</option>
                        </select>
                    </form>
                </div>
                <!-- Product Count & Orderby End -->
                <div class="row masonry">
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-badge andro_badge-featured">
                                <i class="fa fa-star"></i>
                                <span>Promo*</span>
                            </div>
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/7.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Religious</a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>19 (Dhs)</span>
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/8.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Religious</a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>8 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/9.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">History Books </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>6 (Dhs)</span>
                                    <span></span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/10.png" alt="product"></a>
                            </div>
                            <div class="andro_product-badge andro_badge-sale">
                                20% Off
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Geography </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>19 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-badge andro_badge-featured">
                                <i class="fa fa-star"></i>
                                <span>Promo*</span>
                            </div>
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/11.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html"> Onions </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>13 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/12.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html"> Fiction </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>19 (Dhs)</span>
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/2.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Journalism</a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>19 (Dhs)</span>
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/4.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Fiction</a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/5.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Michell Obama </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/6.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">The Book of Love </a>
                                </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/14.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html">Allegiant </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>29 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Product Start -->
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="product-single.html"><img src="assets/img/products/15.png" alt="product"></a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title"> <a href="product-single.html"> History </a> </h6>
                                <div class="andro_rating-wrapper">
                                    <div class="andro_rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>13 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">Détail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                </div>
            </div>
            <!-- Sidebar Start -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <!-- Search Start -->
                    <div class="sidebar-widget widget-search">
                        <form method="post">
                            <div class="andro_search-adv-input">
                                <input type="text" class="form-control" placeholder="Rechercher " name="search"
                                    value="">
                                <button type="submit" name="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Search End -->
                    <!-- Filter: Categories Start -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">
                            Catégories
                        </h5>
                        <ul class="sidebar-widget-list">
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        Politique
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">
                                        Science fiction
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">
                                        Policier
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">
                                        Romance
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">
                                        Histoire
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">
                                        Documentaire
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter: Categories End -->
                    <!-- Filter: Price Start -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">
                            Prix
                        </h5>
                        <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double"
                            data-min="0" data-max="1000" data-from="10" data-to="100" data-grid="true"
                            data-postfix="  (Dhs)" />
                    </div>
                    <!-- Filter: Price End -->
                </div>
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Products End -->
@include('FrontOffice._abonnementNouveaute')
@endsection