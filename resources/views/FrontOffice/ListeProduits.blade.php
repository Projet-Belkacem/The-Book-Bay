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
                <div class="row">
                    <!-- Product Start -->
                    @foreach ($ouvrages as $ouvrage)
                    <div class="col-md-3 col-sm-4 masonry-item" data-theme="{{ $ouvrage->theme->id }}">
                        <div
                            class="andro_product andro_product-minimal andro_product-has-controls andro_product-has-buttons">
                            <div class="andro_product-thumb">
                                <a href="#detail-ouvrage-{{ $ouvrage->id }}" data-toggle="modal"
                                    data-target="#detail-ouvrage-{{ $ouvrage->id }}">
                                    <img src="{{ asset($ouvrage->chemin_photo_couverture) }}" alt=".."
                                        style="height:200px;">
                                </a>
                            </div>
                            <div class="andro_product-body">
                                <h6 class="andro_product-title">
                                    <a href="#detail-ouvrage-{{ $ouvrage->id }}" data-toggle="modal"
                                        class="titre-ouvrage" data-target="#detail-ouvrage-{{ $ouvrage->id }}">
                                        {{ Str::limit($ouvrage->titre, 25, '...') }}
                                    </a>
                                </h6>
                                <div class="andro_rating-wrapper">
                                    Auteur : {{ $ouvrage->auteur }}
                                </div>
                            </div>
                            <div class="andro_product-footer">
                                <div class="andro_product-price">
                                    <span>
                                        {{ $ouvrage->prix }}
                                        (Dhs)
                                    </span>
                                </div>
                                <div class="andro_product-buttons">
                                    <a href="#" class="andro_btn-custom primary">
                                        Au Panier !
                                    </a>
                                    <a href="#detail-ouvrage-{{ $ouvrage->id }}" data-toggle="modal"
                                        data-target="#detail-ouvrage-{{ $ouvrage->id }}" class="andro_btn-custom light">
                                        <u>
                                            Détail
                                        </u>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->
                    <!-- Quick View Modal Start -->
                    <div class="modal fade andro_quick-view-modal" id="detail-ouvrage-{{ $ouvrage->id }}" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="close-btn close-dark close" data-dismiss="modal">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="{{ asset($ouvrage->chemin_photo_couverture) }}"
                                                    style="width: 100%; height:100%">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="andro_product-single-content">
                                                    <div class="andro_rating-wrapper">
                                                        Auteur(s) : {{ $ouvrage->auteur }}
                                                    </div>
                                                    <h3>
                                                        {{ $ouvrage->titre }}
                                                    </h3>
                                                    <div class="andro_product-price">
                                                        <span>
                                                            {{ $ouvrage->prix }}
                                                            (Dhs)
                                                        </span>
                                                    </div>
                                                    <p class="andro_product-excerpt">
                                                        {{ $ouvrage->description }}
                                                    </p>
                                                    <form class="andro_product-atc-form d-flex justify-content-center">
                                                        <div class="qty-outter">
                                                            <a href="#" class="andro_btn-custom">
                                                                Au panier !!
                                                            </a>
                                                            <div class="qty">
                                                                <span class="qty-subtract">
                                                                    <i class="fa fa-minus"></i>
                                                                </span>
                                                                <input type="number" name="qty" value="1" min="1">
                                                                <span class="qty-add">
                                                                    <i class="fa fa-plus"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick View Modal End -->
                    @endforeach
                </div>
            </div>
            <!-- Sidebar Start -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <!-- Search Start -->
                    <div class="sidebar-widget widget-search">
                        <div class="andro_search-adv-input">
                            <input type="text" class="form-control" placeholder="Rechercher" name="search"
                                id="input-recherche-detail" required>
                        </div>
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
                                    <input type="checkbox" class="custom-control-input checkbox-themes"
                                        value="{{ $theme->id }}" id="theme-{{ $theme->id }}">
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

@section('scripts')
<script>
    $("#input-recherche-detail").keyup(function () {
        recherche_multi_criteres();
    });
    $(".checkbox-themes").change(function () {
        recherche_multi_criteres();
    })

    function recherche_multi_criteres() {
        $(".masonry-item")
            .toArray()
            .forEach(function (ouvrage) {
                recherche_par_theme($(ouvrage).data("theme")) &&
                    recherche_par_titre(
                        $(ouvrage).find(".titre-ouvrage").text().trim().toLocaleLowerCase(),
                        $("#input-recherche-detail").val().trim().toLocaleLowerCase()
                    ) ?
                    $(ouvrage).removeClass("d-none") :
                    $(ouvrage).addClass("d-none");
            });

    }

    function recherche_par_theme(ouvrage_theme) {
        if ($(".checkbox-themes:checked").length != 0) {
            var themes = $(".checkbox-themes:checked").map(function () {
                    return parseInt(this.value);
                })
                .get();
            return themes.includes(ouvrage_theme);
        }
        return true;
    }

    function recherche_par_titre(ouvrage_titre, critere_titre) {
        return ouvrage_titre.includes(critere_titre);
    }

</script>
@endsection
