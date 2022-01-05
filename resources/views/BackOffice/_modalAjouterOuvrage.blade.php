<div class="modal fade" id="ajouter-ouvrage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Ajouter un nouvel Ouvrage
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ajouter_ouvrage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" name="chemin_photo_couverture" class="form-control mt-1" required>
                        </div>
                        <div class="col-md-8">
                            <table class="table w-100">
                                <tr>
                                    <th>
                                        Titre :
                                    </th>
                                    <td>
                                        <input type="text" name="titre" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Prix :
                                    </th>
                                    <td>
                                        <input type="number" min="1" step="0.01" name="prix" class="form-control"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Auteur :
                                    </th>
                                    <td>
                                        <input type="text" name="auteur" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Theme :
                                    </th>
                                    <td>
                                        <select name="theme_id" class="form-control" required>
                                            <option value selected disabled>
                                                -Sélectionner-
                                            </option>
                                            @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}">
                                                {{ $theme->libelle }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Stock :
                                    </th>
                                    <td>
                                        <input type="number" min="1" name="quantite_actuelle" class="form-control"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Description
                                    </th>
                                    <td>
                                        <textarea name="description" class="w-100" rows="10"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        Annuler
                    </button>
                    <button type="submit" class="btn btn-success bg-success">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>