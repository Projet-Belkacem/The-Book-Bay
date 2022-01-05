<div class="modal fade" id="detail-ouvrage-{{ $ouvrage->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Detail Ouvrage #OUV{{ $ouvrage->id }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($ouvrage->chemin_photo_couverture) }}" alt=".."
                            style="width: 100%;height: 300px;">
                    </div>
                    <div class="col-md-8">
                        <table class="table w-100">
                            <tr>
                                <th>
                                    Titre :
                                </th>
                                <td>
                                    {{ $ouvrage->titre }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Prix :
                                </th>
                                <td>
                                    {{ $ouvrage->prix }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Auteur :
                                </th>
                                <td>
                                    {{ $ouvrage->auteur }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Theme :
                                </th>
                                <td>
                                    {{ $ouvrage->theme->libelle }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Stock :
                                </th>
                                <td>
                                    {{ $ouvrage->quantite_actuelle }} pcs
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Description
                                </th>
                                <td>
                                    {{ $ouvrage->description }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">
                    Retour
                </button>
            </div>
        </div>
    </div>
</div>