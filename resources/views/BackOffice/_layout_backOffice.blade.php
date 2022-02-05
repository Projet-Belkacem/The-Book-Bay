<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style_back_office.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        Admin
    </title>

    @section('styles')
    @show
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="{{ route('accueil_front_office') }}">
                        The-Book-Bay
                    </a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-info">
                        <span class="user-name">
                            <strong>
                                {{ Auth::user()->nom }}
                                {{ Auth::user()->prenom }}
                            </strong>
                        </span>
                        <span class="user-role">Administrateur</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="{{ route('admin_home') }}"
                                class="{{ Route::currentRouteName() == 'admin_home' ? 'active' : '' }}">
                                <i class="fa fa-home mr-3"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gestion_membres') }}"
                                class="{{ Route::currentRouteName() == 'gestion_membres' ? 'active' : '' }}">
                                <i class="fa fa-user mr-3"></i>
                                <span>Membres</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gestion_commandes') }}"
                                class="{{ Route::currentRouteName() == 'gestion_commandes' ? 'active' : '' }}">
                                <i class="fa fa-shopping-basket mr-3" aria-hidden="true"></i>
                                <span>Commandes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gestion_ouvrages') }}">
                                <i class="fas fa-book mr-3"></i>
                                <span>Ouvrages</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer text-center">
                <p class="text-white">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved L'équipe
                    The-Book-Bay
                    <br>
                    <a href="#;">-Ecole SupMTI-</a>
                    <br>
                    Groupe ISI5 GS
                </p>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                @section('content')
                @show
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <script src="{{ asset('assets/js/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/backOffice/main.js') }}"></script>

    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.4/js/dataTables.colReorder.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @section('scripts')
    @show
</body>

</html>