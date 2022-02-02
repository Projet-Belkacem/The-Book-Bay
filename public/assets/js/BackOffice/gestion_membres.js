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
