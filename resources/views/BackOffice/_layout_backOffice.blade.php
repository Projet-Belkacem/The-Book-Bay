<!doctype html>
<html>

<head>
    <title>
        Admin
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style_back_office.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @section('styles')
    @show
</head>

<body>
    {{-- <div class="container d-flex align-items-stretch">

    <div id="content" class="p-4 p-md-5 pt-5">
       
    </div>
    </div> --}}

    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand">
                        <a href="#">Brand</a>
                    </div>
                </div>
                <li class="{{ Route::currentRouteName() == 'admin_home' ? 'active' : '' }}">
                    <a href="{{ route('admin_home') }}"
                        class="{{ Route::currentRouteName() == 'admin_home' ? 'active' : '' }}">
                        <span class="fa fa-home mr-3"></span>
                        Accueil
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'gestion_membres' ? 'active' : '' }}">
                    <a href="{{ route('gestion_membres') }}"
                        class="{{ Route::currentRouteName() == 'gestion_membres' ? 'active' : '' }}">
                        <span class="fa fa-user mr-3"></span>
                        Membres
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'gestion_commandes' ? 'active' : '' }}">
                    <a href="{{ route('gestion_commandes') }}"
                        class="{{ Route::currentRouteName() == 'gestion_commandes' ? 'active' : '' }}">
                        Commandes
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'gestion_ouvrages' ? 'active' : '' }}">
                    <a href="{{ route('gestion_ouvrages') }}">
                        <span class="fa fa-sticky-note mr-3"></span>
                        Ouvrages
                    </a>
                </li>

            </ul>
            <div class="footer mt-5 text-center">
                <p class="text-white">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved L'équipe
                    <br>
                    The-Book-Bay
                    <br>
                    <a href="#;">-Ecole SupMTI-</a>
                    <br>
                    Groupe ISI5 GS
                </p>

            </div>

        </nav>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container ml-3 w-100">
                @section('content')
                @show
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script src="{{ asset('assets/js/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/backOffice/popper.js') }}"></script>
    <script src="{{ asset('assets/js/backOffice/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/backOffice/main.js') }}"></script>

    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.4/js/dataTables.colReorder.min.js"></script>

    @section('scripts')
    @show
</body>

</html>