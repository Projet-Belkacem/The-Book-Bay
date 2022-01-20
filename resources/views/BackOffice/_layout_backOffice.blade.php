<!doctype html>
<html>

<head>
    <title>
        Admin
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style_back_office.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @section('styles')
    @show
</head>

<body>
    <div class="container d-flex align-items-stretch">
        <nav id="sidebar" class="img"
            style="background-image: url({{ asset('assets/img/bg_sidebar_backoffice.jpg') }});">
            <div class="p-4">
                <h1>
                    <a href="index.html" class="logo">
                        Travel
                        <span>
                            Travel Agency
                        </span>
                    </a>
                </h1>
                <ul class="list-unstyled components mb-5">
                    <li class="{{ Route::currentRouteName() == 'admin_home' ? 'active' : '' }}">
                        <a href="{{ route('admin_home') }}">
                            <span class="fa fa-home mr-3"></span>
                            Accueil
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'gestion_membres' ? 'active' : '' }}">
                        <a href="{{ route('gestion_membres') }}">
                            <span class="fa fa-user mr-3"></span>
                            Membres
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-plane mr-3"></span>
                            Commandes
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'gestion_ouvrages' ? 'active' : '' }}">
                        <a href="{{ route('gestion_ouvrages') }}">
                            <span class="fa fa-sticky-note mr-3"></span>
                            Ouvrages
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-cogs mr-3"></span>
                            Statistiques
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-paper-plane mr-3"></span>
                            Contacts
                        </a>
                    </li>
                </ul>
                <div class="footer mt-5 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved L'équipe The-Book-Bay
                        <br>
                        <a href="#;">-Ecole SupMTI-</a>
                        Groupe ISI5
                    </p>
                </div>
            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            @section('content')
            @show
        </div>
    </div>
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