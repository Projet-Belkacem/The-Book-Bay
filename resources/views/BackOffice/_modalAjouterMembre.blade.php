<div class="modal fade" id="ajouter-membre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Ajouter un nouveau Membre
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ajouter_membre') }}" method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table w-100 text-right">
                                <tr>
                                    <th>
                                        Nom :
                                    </th>
                                    <td>
                                        <input type="text" name="nom" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Prenom :
                                    </th>
                                    <td>
                                        <input type="text" name="prenom" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Date de Naissance :
                                    </th>
                                    <td>
                                        <input type="date" step="0.01" name="date_naissance" class="form-control"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Télephone :
                                    </th>
                                    <td>
                                        <input type="text" name="phone" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Email :
                                    </th>
                                    <td>
                                        <input type="email" name="email" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mot de Passe :
                                    </th>
                                    <td>
                                        <input type="password" name="password" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Statut :
                                    </th>
                                    <td>
                                        <select name="is_admin" class="form-control" required>
                                            <option value selected disabled>
                                                -Sélectionner-
                                            </option>
                                            <option value="ADMIN">
                                                Admin
                                            </option>
                                            <option value value="MEMBRE">
                                                Membre
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Etat :
                                    </th>
                                    <td class="text-left">
                                        <span class="badge badge-success">
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            Actif
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Adresse :
                                    </th>
                                    <td>
                                        <textarea name="adresse" class="w-100" rows="4" required></textarea>
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