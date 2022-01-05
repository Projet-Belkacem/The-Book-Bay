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
                    <li class="active">
                        <a href="#">
                            <span class="fa fa-home mr-3"></span>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                    <li>
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
    <script src="{{ asset('assets/js/backOffice/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/backOffice/popper.js') }}"></script>
    <script src="{{ asset('assets/js/backOffice/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/backOffice/main.js') }}"></script>
    @section('scripts')
    @show
</body>

</html>