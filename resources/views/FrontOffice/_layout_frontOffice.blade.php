<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        The Book Bay - Meilleure selection & Choix multiple !
    </title>
    <!-- Vendor Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css') }}">
    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
    <!-- Bookz Style sheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    @section('styles')
    @show

</head>

<body>
    <!-- Prealoder start -->
    <div class="andro_preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- Prealoader End -->
    <!-- Newsletter Modal Start -->
    <div class="modal fade" id="androNewsletterPopup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog andro_newsletter-popup-modal modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="assets/img/ig/3.jpg" alt="newsletter">
                    <div class="close-btn close newsletter-popup-trigger" data-dismiss="modal">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="andro_newsletter-popup-text-wrapper">
                        <h3>Join Our Newsletter</h3>
                        <p>Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                            Curabitur aliquet quam id dui posuere.</p>
                    </div>
                    <form method="post" class="text-center">
                        <div class="form-group">
                            <input type="email" placeholder="Email Address" class="form-control" name="newsletter-email"
                                value="">
                        </div>
                        <button type="submit" class="andro_btn-custom" name="button">Subscribe</button>
                        <span class="newsletter-popup-trigger" data-dismiss="modal">No Thanks</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal End -->
    <!-- Aside (Right Panel) -->
    <aside class="andro_aside andro_aside-right">
        <div class="sidebar">
            <!-- Popular Categories Start -->
            <div class="sidebar-widget widget-categories-icons">
                <h5 class="widget-title">Catégories populaires</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-tribune"></i>
                                <h5>Politique</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-artificial-intelligence"></i>
                                <h5>Science fiction</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-detective-story"></i>
                                <h5>Policier</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-like"></i>
                                <h5>Romance</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-book"></i>
                                <h5>Histoire</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-book-1"></i>
                                <h5>Documentaire</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Categories End -->
        </div>
    </aside>
    <div class="andro_aside-overlay aside-trigger-right"></div>
    <!-- Aside (Mobile Navigation) -->
    <aside class="andro_aside andro_aside-left">
        <a class="navbar-brand" href="{{ route('accueil_front_office') }}">
            <img src="assets/img/logo.png" alt="logo">
        </a>
        <ul>
            <li class="menu-item">
                <a href="{{ route('accueil_front_office') }}">
                    Accueil
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('liste_des_ouvrages') }}">
                    Ouvrages
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('contactez_nous') }}">
                    Contactez-nous
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('a_propos') }}">
                    A propos
                </a>
            </li>
        </ul>
    </aside>
    <div class="andro_aside-overlay aside-trigger-left"></div>
    <!-- Header Start -->
    <header class="andro_header header-3 can-sticky">
        <!-- Topheader Start -->
        <div class="andro_header-top">
            <div class="container">
                <div class="andro_header-top-inner">
                    <ul class="andro_header-top-sm andro_sm">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="andro_header-top-links">
                        <li class="menu-item">
                            @auth
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link text-white">
                                    Se déconnecter
                                </button>
                            </form>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}">
                                <i class="fas fa-user-shield"></i>
                                S'identifier
                            </a>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
            @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ session("error") }}
            </div>
            @endif
        </div>
        <!-- Topheader End -->
        <!-- Middle Header Start -->
        <div class="andro_header-middle">
            <div class="container">
                <nav class="navbar">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('accueil_front_office') }}">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <!-- Search Form -->
                    <div class="andro_search-adv">
                        <form method="post">
                            <div class="andro_search-adv-cats">
                                <span>
                                    <i class="fas fa-book-reader"></i>
                                </span>
                            </div>
                            <div class="andro_search-adv-input">
                                <input type="text" class="form-control"
                                    placeholder="Nom de l'auteur, libellé l'ouvrage, livre ..." name="search" value="">
                                <button type="submit" name="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="andro_header-controls">
                        <ul class="andro_header-controls-inner">
                            <li class="andro_header-favorites">
                                <a href="{{ route('wish_list') }}" title="Liste des voeux">
                                    <i class="flaticon-like"></i>
                                </a>
                            </li>
                            <li class="andro_header-cart">
                                <a href="{{ route('mon_panier') }}" title="Mon Panier">
                                    <i class="flaticon-shopping-basket"></i>
                                    <div class="andro_header-cart-content">
                                        <span>
                                            {{-- {{ count(session("panier")[0]) }} Elements --}}
                                        </span>
                                        <span>249.99 (Dhs)</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- Toggler -->
                        <div class="aside-toggler aside-trigger-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Middle Header End -->
        <!-- Bottom Header Start -->
        <div class="andro_header-bottom">
            <div class="container">
                <div class="andro_header-bottom-inner">
                    <div class="andro_category-mm">
                        <div class="andro_category-mm-header">
                            <h6>
                                <i class="fas fa-th-large"></i>
                                Catégories
                            </h6>
                        </div>
                        <div class="andro_category-mm-body">
                            <ul>
                                <li class="andro_category-mm-item">
                                    <a href="#">
                                        Politique
                                    </a>
                                </li>
                                <li class="andro_category-mm-item">
                                    <a href="#">
                                        Science fiction
                                    </a>
                                </li>
                                <li class="andro_category-mm-item">
                                    <a href="#">
                                        Policier
                                    </a>
                                </li>
                                <li class="andro_category-mm-item">
                                    <a href="#">
                                        Romance
                                    </a>
                                </li>
                                <li class="andro_category-mm-item">
                                    <a href="#">
                                        Histoire
                                    </a>
                                </li>
                                <li class="andro_category-mm-item">
                                    <a href="#">
                                        Documentaire
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Menu -->
                    <ul class="navbar-nav">
                        <li class="menu-item">
                            <a href="{{ route('accueil_front_office') }}">
                                Accueil
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('liste_des_ouvrages') }}">
                                Ouvrages
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contactez_nous') }}">
                                Contactez-nous
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('a_propos') }}">
                                A propos
                            </a>
                        </li>
                    </ul>
                    <!-- Side navigation toggle -->
                    <div class="aside-toggler aside-trigger-right desktop-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header End -->
    </header>
    <!-- Header End -->

    @section('main_content')
    @show

    <!-- Footer Start -->
    <footer class="andro_footer">
        <!-- Top Footer -->
        <div class="container">
            <div class="andro_footer-top">
                <div class="andro_footer-logo">
                    <img src="assets/img/logo.png" alt="logo">
                </div>
                <div class="andro_footer-buttons">
                    <a href="#"> <img src="assets/img/android.png" alt="Obtenir depuis Google Play"></a>
                    <a href="#"> <img src="assets/img/ios.png" alt="Obtenir depuis AppStore"></a>
                </div>
            </div>
        </div>
        <!-- Middle Footer -->
        <div class="andro_footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Information</h5>
                        <ul>
                            <li>
                                <a href="{{ route('accueil_front_office') }}">
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('liste_des_ouvrages') }}">
                                    Ouvrages
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contactez_nous') }}">
                                    Contactez-nous
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('a_propos') }}">
                                    A propos
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Top Catégories</h5>
                        <ul>
                            <li> <a href="#">Politique</a> </li>
                            <li> <a href="#">Science fiction</a> </li>
                            <li> <a href="#">Policier</a> </li>
                            <li> <a href="#">Romance</a> </li>
                            <li> <a href="#">Histoire</a> </li>
                            <li> <a href="#">Documentaire</a> </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 footer-widget">
                        <h5 class="widget-title">Nos réseaux !</h5>
                        <ul class="social-media">
                            <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
                            <li> <a href="#" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
                            <li> <a href="#" class="google"> <i class="fab fa-google"></i> </a> </li>
                            <li> <a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
                        </ul>
                        <div class="andro_footer-offer">
                            <p>
                                Suivez-nous sur les réseaux sociaux
                                <br>
                                afin de vous tenir compte de nos actualités !
                            </p>
                            <a href="#" class="andro_btn-custom btn-sm shadow-none">
                                S'abonner !
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="andro_footer-bottom">
            <div class="container">
                <ul></ul>
                <div class="andro_footer-copyright">
                    <p>
                        Copyright © 2021-2022
                        <a href="#">The-Book-Bay</a>
                        Tout droit réservés.
                    </p>
                    <a href="#" class="andro_back-to-top">
                        Haut
                        <i class="fas fa-chevron-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/js/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.slimScroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick-animation.min.js') }}"></script>
    <!-- Bookz Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @section('scripts')
    @show

</body>

</html>