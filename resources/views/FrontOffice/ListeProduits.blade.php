@extends('FrontOffice._layout_frontOffice')

@section('main_content')
<!-- Products Start -->
<div class="section">
    <div class="andro_section-fw">
        <div class="row">
            <div class="col-lg-9">
                <!-- Product Count & Orderby Start -->
                <div class="andro_shop-global">
                    <p>Résultat : <b>{{ count($ouvrages) }}</b> Ouvrage(s) </p>
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
                    @foreach ($ouvrages as $ouvrage)
                    <div class="col-md-3 col-sm-4 masonry-item">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="">
                                    <img src="{{ asset($ouvrage->chemin_photo_couverture) }}" alt=".."
                                        style="height:200px;">
                                </a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title">
                                    <a href="">
                                        {{ Str::limit($ouvrage->titre, 25, '...') }}
                                    </a>
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
                                    <span>19 (Dhs)</span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">Au Panier !</a>
                                    <a href="#" data-toggle="modal" data-target="#quickViewModal"
                                        class="andro_btn-custom light">
                                        <u>
                                            Détail
                                        </u>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                            @foreach ($themes as $theme)
                            <li>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="theme-{{ $theme->id }}">
                                    <label class="custom-control-label" for="theme-{{ $theme->id }}">
                                        {{ $theme->libelle }}
                                    </label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Filter: Categories End -->
                    <!-- Filter: Price Start -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">
                            Prix
                        </h5>
                        <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double"
                            data-min="0" data-max="{{ $max_prix }}" data-from="10" data-to="100" data-grid="true"
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