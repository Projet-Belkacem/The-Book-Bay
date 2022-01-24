@extends('BackOffice._layout_backOffice')

@section('styles')
@endsection

@section('content')
<h2>
    <u>
        Gestion des Membres
    </u>
</h2>
@if ($errors->any())
<div class="alert alert-danger mt-2">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @endforeach
    </ul>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<div class="row">
    <div class="col-md-12 text-right mb-2">
        <a href="#;" class="btn btn-success bg-success" data-toggle="modal" data-target="#ajouter-membre">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
            Membre
        </a>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="table-membres" class="table table-bordered table-stripped w-100 text-center">
                <thead>
                    <tr>
                        <th>Actions</th>
                        <th>Ref</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date Naissance</th>
                        <th>Adresse</th>
                        <th>Télephone</th>
                        <th>Email</th>
                        <th>Etat</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($membres as $membre)
                    <tr>
                        <td>
                            <a href="#" class="text-primary" data-toggle="modal"
                                data-target="#modifier-membre-{{ $membre->id }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            |
                            @if ($membre->is_actif)
                            <a href="#" class="text-danger" data-toggle="modal"
                                data-target="#supprimer-membre-{{ $membre->id }}">
                                <i class="fa fa-ban" aria-hidden="true" title="Bloquer"></i>
                            </a>
                            @else
                            <a href="#" class="text-success" data-toggle="modal"
                                data-target="#supprimer-membre-{{ $membre->id }}">
                                <i class="fa fa-check-circle" aria-hidden="true" title="Débloquer"></i>
                            </a>
                            @endif
                        </td>
                        <td>
                            #MUID{{ $membre->id }}
                        </td>
                        <td>
                            {{ $membre->nom }}
                        </td>
                        <td>
                            {{ $membre->prenom }}
                        </td>
                        <td>
                            {{ $membre->date_naissance }}
                        </td>
                        <td>
                            {{ $membre->adresse }}
                        </td>
                        <td>
                            {{ $membre->phone }}
                        </td>
                        <td>
                            {{ $membre->email }}
                        </td>
                        <td>
                            @if ($membre->is_actif )
                            <span class="badge badge-success">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                Actif
                            </span>
                            @else
                            <span class="badge badge-danger">
                                <i class="fa fa-ban" aria-hidden="true"></i>
                                Bloqué(e)
                            </span>
                            @endif
                        </td>
                        <td>
                            @if ($membre->is_admin)
                            <b>
                                Admin
                            </b>
                            @else
                            Client
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('BackOffice._modalAjouterMembre')
@include('BackOffice._modalSupprimerMembre')
@include('BackOffice._modalModifierMembre')
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#table-membres').DataTable({
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 lignes', '25 lignes', '50 lignes', 'afficher tous']
            ],
            colReorder: true,
            buttons: [
                'pageLength',
                {
                    text: 'Imprimer',
                    action: function () {
                        alert(
                            "cette fonctionnalité sera réalisée sous demande auprés des développeurs."
                        );
                    }
                },
                'excel',
                {
                    extend: 'colvis',
                    text: "visibilité",
                }
            ],
            "language": {
                buttons: {
                    pageLength: {
                        _: "Afficher %d éléments",
                        '-1': "Tout afficher"
                    }
                },
                "paginate": {
                    "previous": "&lt",
                    "next": "&gt",
                },
                "zeroRecords": "Aucune données disponibles ...",
                "info": "Total : _TOTAL_ Membres",
                "infoEmpty": "Pas de données disponibles ...",
                "infoFiltered": "(filtré depuis _MAX_ lignes)",
                "sSearch": "Rechercher"
            },
        });
    });

</script>
@endsection