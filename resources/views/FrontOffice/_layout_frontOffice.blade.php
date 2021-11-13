<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookz - Book Shop HTML Template</title>
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
    <!-- Quick View Modal Start -->
    <div class="modal fade andro_quick-view-modal" id="quickViewModal" role="dialog" aria-hidden="true">
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
                                <img src="assets/img/products/9.png" alt="product">
                            </div>
                            <div class="col-md-7">
                                <div class="andro_product-single-content">
                                    <div class="andro_rating-wrapper">
                                        <div class="andro_rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>4 Stars</span>
                                    </div>
                                    <h3>History Books </h3>
                                    <div class="andro_product-price">
                                        <span>8$</span>
                                        <span>14$</span>
                                    </div>
                                    <p class="andro_product-excerpt">Cras ultricies ligula sed magna dictum porta.
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                    <form class="andro_product-atc-form">
                                        <div class="andro_product-variation-wrapper">
                                            <div class="form-group">
                                                <select class="form-control" name="amount">
                                                    <option value="">Select Amount</option>
                                                    <option value="1">1 Piece</option>
                                                    <option value="2">2 Pieces</option>
                                                    <option value="3">3 Pieces</option>
                                                    <option value="4">4 Pieces</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="breed">
                                                    <option value="">Select a Breed</option>
                                                    <option value="italian">Italian</option>
                                                    <option value="egyptian">Egyptian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="qty-outter">
                                            <a href="product-single.html" class="andro_btn-custom">Buy Now</a>
                                            <div class="qty">
                                                <span class="qty-subtract"><i class="fa fa-minus"></i></span>
                                                <input type="text" name="qty" value="1">
                                                <span class="qty-add"><i class="fa fa-plus"></i></span>
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
    <!-- Aside (Right Panel) -->
    <aside class="andro_aside andro_aside-right">
        <div class="sidebar">
            <!-- Popular Categories Start -->
            <div class="sidebar-widget widget-categories-icons">
                <h5 class="widget-title">Popular Categories</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-tribune"></i>
                                <h5>Politics & Affairs</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-artificial-intelligence"></i>
                                <h5>Fiction</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-detective-story"></i>
                                <h5>Mystery</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-like"></i>
                                <h5>Love</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-book"></i>
                                <h5>Sci Fi</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="andro_icon-block text-center has-link">
                            <a href="#">
                                <i class="flaticon-book-1"></i>
                                <h5>Biography</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Categories End -->
            <!-- Popular Tags Start -->
            <div class="sidebar-widget">
                <h5 class="widget-title">Popular Tags</h5>
                <div class="tagcloud">
                    <a href="#">Electronics</a>
                    <a href="#">Politics & Affairs</a>
                    <a href="#">Cricket</a>
                    <a href="#">Book</a>
                    <a href="#">Auto & Bike</a>
                    <a href="#">Fiction</a>
                    <a href="#">Mystery</a>
                    <a href="#">Mystery</a>
                    <a href="#">Beauty & Health</a>
                    <a href="#">Technology</a>
                    <a href="#">Health & Fitness</a>
                </div>
            </div>
            <!-- Popular Tags End -->
        </div>
    </aside>
    <div class="andro_aside-overlay aside-trigger-right"></div>
    <!-- Aside (Mobile Navigation) -->
    <aside class="andro_aside andro_aside-left">
        <a class="navbar-brand" href="index-2.html"> <img src="assets/img/logo.png" alt="logo"> </a>
        <ul>
            <li class="menu-item menu-item-has-children">
                <a href="#">Home Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="index-2.html">Home v1</a> </li>
                    <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                    <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-has-children">
                        <a href="blog-grid.html">Blog Archive</a>
                        <ul class="sub-menu">
                            <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                            <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                            <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
                        </ul>
                    </li>
                    <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
                    <li class="menu-item"> <a href="login.html">Login</a> </li>
                    <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
                    <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                    <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                    <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
                    <li class="menu-item"> <a href="legal.html">Legal</a> </li>
                    <li class="menu-item"> <a href="error.html">Error 404</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Shop Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="shop-v1.html"> Shop v1 (Default) </a> </li>
                    <li class="menu-item"> <a href="shop-v2.html"> Shop v2 (Full Width) </a> </li>
                    <li class="menu-item"> <a href="shop-v3.html"> Shop v3 (No Sidebar) </a> </li>
                    <li class="menu-item"> <a href="shop-v4.html"> Shop v4 (List view) </a> </li>
                </ul>
            </li>
            <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
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
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                        <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                    </ul>
                    <ul class="andro_header-top-links">
                        <li class="menu-item"><a href="login.html"> My Account </a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#"> <span class="andro_current-currency-text">Currency</span> (USD) </a>
                            <ul class="sub-menu sub-menu-left">
                                <li> <a href="#">United States Dollar (USD)</a> </li>
                                <li> <a href="#">Kuwait Dinar (KWD)</a> </li>
                                <li> <a href="#">Pound Sterling (GBP)</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Topheader End -->
        <!-- Middle Header Start -->
        <div class="andro_header-middle">
            <div class="container">
                <nav class="navbar">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index-2.html"> <img src="assets/img/logo.png" alt="logo"> </a>
                    <!-- Search Form -->
                    <div class="andro_search-adv">
                        <form method="post">
                            <div class="andro_search-adv-cats">
                                <span>All Categories</span>
                                <div class="sub-menu">
                                    <div class="andro_dropdown-scroll">
                                        <label>
                                            <input type="checkbox" name="category1" value="Politics & Affairs">
                                            Politics & Affairs
                                            <i class="fas fa-check"></i>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="category2" value="home-care">
                                            The Book of Love
                                            <i class="fas fa-check"></i>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="category3" value="Auto & Bike">
                                            Auto & Bike
                                            <i class="fas fa-check"></i>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="category4" value="Fiction">
                                            Fiction
                                            <i class="fas fa-check"></i>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="category5" value="Mystery">
                                            Mystery
                                            <i class="fas fa-check"></i>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="category6" value="baby-kids">
                                            Home & Garden
                                            <i class="fas fa-check"></i>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="category7" value="Beauty & Health">
                                            Beauty & Health
                                            <i class="fas fa-check"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="andro_search-adv-input">
                                <input type="text" class="form-control" placeholder="Look for History , Novels "
                                    name="search" value="">
                                <button type="submit" name="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="andro_header-controls">
                        <ul class="andro_header-controls-inner">
                            <li class="andro_header-favorites"> <a href="wishlist.html" title="Your Wishlist"> <i
                                        class="flaticon-like"></i> </a> </li>
                            <li class="andro_header-cart">
                                <a href="cart.html" title="Your Cart">
                                    <i class="flaticon-shopping-basket"></i>
                                    <div class="andro_header-cart-content">
                                        <span>9 Items</span>
                                        <span>249.99$</span>
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
                            <h6> <i class="fas fa-th-large"></i> Categories</h6>
                        </div>
                        <div class="andro_category-mm-body">
                            <ul>
                                <!-- Level 1 -->
                                <li class="andro_category-mm-item andro_category-mm-item-has-children">
                                    <a href="#"> Politics & Affairs </a>
                                    <ul class="andro_category-mm-2-cols">
                                        <!-- Level 2 -->
                                        <li>
                                            <div class="andro_category-mm-banner">
                                                <img src="assets/img/megamenu/1.jpg" alt="megamenu img">
                                                <div class="andro_category-mm-banner-desc">
                                                    <h6>Politics & Affairs</h6>
                                                    <p>Experience Book Politics & Affairs like never before</p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li> <a href="#">Cricket</a> </li>
                                                <li> <a href="#">Mystery</a> </li>
                                                <li> <a href="#">Book Mystery</a> </li>
                                                <li> <a href="#">Geography</a> </li>
                                                <li> <a href="#">Beauty & Health</a> </li>
                                                <li> <a href="#">Music History</a> </li>
                                                <li> <a href="#">Religious </a> </li>
                                                <li> <a href="#">Yoga</a> </li>
                                                <li> <a href="#">Biography</a> </li>
                                            </ul>
                                            <ul>
                                                <li> <a href="#">History</a> </li>
                                                <li> <a href="#">Book Politics & Affairs</a> </li>
                                                <li> <a href="#">Journalism</a> </li>
                                                <li> <a href="#">Geography </a> </li>
                                                <li> <a href="#">World Economy </a> </li>
                                                <li> <a href="#">Sports </a> </li>
                                                <li> <a href="#">Fiction</a> </li>
                                                <li> <a href="#">Mystery</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="andro_category-mm-item"> <a href="#"> Auto & Bike</a> </li>
                                <li class="andro_category-mm-item andro_category-mm-item-has-children">
                                    <a href="#"> Fiction </a>
                                    <ul class="andro_category-mm-2-cols">
                                        <!-- Level 2 -->
                                        <li>
                                            <div class="andro_category-mm-banner">
                                                <img src="assets/img/megamenu/2.jpg" alt="megamenu img">
                                                <div class="andro_category-mm-banner-desc">
                                                    <h6>Fiction</h6>
                                                    <p>Hand written Fiction for your Book goods</p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li> <a href="#">Cricket</a> </li>
                                                <li> <a href="#">Mystery</a> </li>
                                                <li> <a href="#">Book Mystery</a> </li>
                                                <li> <a href="#">Geography</a> </li>
                                                <li> <a href="#">Beauty & Health</a> </li>
                                            </ul>
                                            <ul>
                                                <li> <a href="#">Music History</a> </li>
                                                <li> <a href="#">Religious </a> </li>
                                                <li> <a href="#">Yoga</a> </li>
                                                <li> <a href="#">Biography</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="andro_category-mm-item"> <a href="#">Home & Garden</a> </li>
                                <li class="andro_category-mm-item"> <a href="#"> The Book of Love</a> </li>
                                <li class="andro_category-mm-item"> <a href="#"> Mystery</a> </li>
                                <li class="andro_category-mm-item"> <a href="#"> Beauty Care</a> </li>
                                <li
                                    class="andro_category-mm-item andro_category-mm-item-has-children andro_category-mm-item-expand">
                                    <a href="#"> <i class="fas fa-plus"></i> More Categories</a>
                                    <ul class="andro_category-mm-2-cols">
                                        <!-- Level 2 -->
                                        <li>
                                            <div class="andro_category-mm-banner">
                                                <img src="assets/img/megamenu/3.jpg" alt="megamenu img">
                                                <div class="andro_category-mm-banner-desc">
                                                    <h6>More Categories</h6>
                                                    <p>Explore more categories that we offer</p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li> <a href="#">Cricket</a> </li>
                                                <li> <a href="#">Mystery</a> </li>
                                                <li> <a href="#">Book Mystery</a> </li>
                                                <li> <a href="#">Geography</a> </li>
                                                <li> <a href="#">Beauty & Health</a> </li>
                                            </ul>
                                            <ul>
                                                <li> <a href="#">Music History</a> </li>
                                                <li> <a href="#">Religious </a> </li>
                                                <li> <a href="#">Yoga</a> </li>
                                                <li> <a href="#">Biography</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Menu -->
                    <ul class="navbar-nav">
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Home Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"> <a href="index-2.html">Home v1</a> </li>
                                <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                                <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="blog-grid.html">Blog Archive</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                                        <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                                        <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
                                    </ul>
                                </li>
                                <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
                                <li class="menu-item"> <a href="login.html">Login</a> </li>
                                <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
                                <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                                <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                                <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
                                <li class="menu-item"> <a href="legal.html">Legal</a> </li>
                                <li class="menu-item"> <a href="error.html">Error 404</a> </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children mega-menu-wrapper">
                            <a href="shop-v1.html">Shop</a>
                            <ul class="sub-menu">
                                <li>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mega-menu-item">
                                                    <h6>Membership Delivery</h6>
                                                    <p>
                                                        Contrary to popular belief, Lorem Ipsum is not simply random
                                                        text. It has roots in a piece of classical Latin literature from
                                                        45 BC,
                                                        making it over 2000 years old.
                                                    </p>
                                                    <a href="login.html"
                                                        class="andro_btn-custom shadow-none btn-sm">Become a Member</a>
                                                </div>
                                            </div>
                                            <div class="offset-lg-1 col-lg-3">
                                                <div class="mega-menu-item">
                                                    <h6>Shop Pages</h6>
                                                    <a href="shop-v1.html">Shop v1 (Default)</a>
                                                    <a href="shop-v2.html">Shop v2 (Full Width)</a>
                                                    <a href="shop-v3.html">Shop v3 (No Sidebar)</a>
                                                    <a href="shop-v4.html">Shop v4 (List view)</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mega-menu-item">
                                                    <h6>Product Details Pages</h6>
                                                    <a href="product-single.html">Product Details v1</a>
                                                    <a href="product-single-v2.html">Product Details v2</a>
                                                    <a href="#" class="coming-soon">Product Details v3 <span>Coming
                                                            Soon</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
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
                    <a href="#"> <img src="assets/img/android.png" alt="download it on the app store"></a>
                    <a href="#"> <img src="assets/img/ios.png" alt="download it on the app store"></a>
                </div>
            </div>
        </div>
        <!-- Middle Footer -->
        <div class="andro_footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Information</h5>
                        <ul>
                            <li> <a href="index-2.html">Home</a> </li>
                            <li> <a href="blog-grid.html">Blog</a> </li>
                            <li> <a href="about-us.html">About Us</a> </li>
                            <li> <a href="shop-v1.html">Shop</a> </li>
                            <li> <a href="contact-us.html">Contact Us</a> </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Top Categories</h5>
                        <ul>
                            <li> <a href="#">Politics & Affairs</a> </li>
                            <li> <a href="#">Fiction</a> </li>
                            <li> <a href="#">Mystery</a> </li>
                            <li> <a href="#">Auto & Bike</a> </li>
                            <li> <a href="#">The Book of Love</a> </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Others</h5>
                        <ul>
                            <li> <a href="checkout.html">Checkout</a> </li>
                            <li> <a href="cart.html">Cart</a> </li>
                            <li> <a href="product-single.html">Product</a> </li>
                            <li> <a href="shop-v1.html">Shop</a> </li>
                            <li> <a href="legal.html">Legal</a> </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <h5 class="widget-title">Social Media</h5>
                        <ul class="social-media">
                            <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
                            <li> <a href="#" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
                            <li> <a href="#" class="google"> <i class="fab fa-google"></i> </a> </li>
                            <li> <a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
                        </ul>
                        <div class="andro_footer-offer">
                            <p>Signup and get exclusive offers and coupon codes</p>
                            <a href="#" class="andro_btn-custom btn-sm shadow-none">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="andro_footer-bottom">
            <div class="container">
                <ul>
                    <li> <a href="#">Privacy Policy</a> </li>
                    <li> <a href="#">Refund Policy</a> </li>
                    <li> <a href="#">Cookie Policy</a> </li>
                    <li> <a href="#">Terms & Conditions</a> </li>
                </ul>
                <div class="andro_footer-copyright">
                    <p> Copyright © 2020 <a href="#">YourWebsite</a> All Rights Reserved. </p>
                    <a href="#" class="andro_back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
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
</body>

</html>