@foreach ($membres as $membre)
<div class="modal fade" id="modifier-membre-{{ $membre->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">
                    Modifier le Membre #MUID{{ $membre->id }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('modifier_membre', ['membre'=> $membre->id]) }}" method="POST" autocomplete="off">
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
                                        <input type="text" name="nom" class="form-control" value="{{ $membre->nom }}"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Prenom :
                                    </th>
                                    <td>
                                        <input type="text" name="prenom" class="form-control"
                                            value="{{ $membre->prenom }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Date de Naissance :
                                    </th>
                                    <td>
                                        <input type="date" step="0.01" name="date_naissance" class="form-control"
                                            value="{{ $membre->date_naissance }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Télephone :
                                    </th>
                                    <td>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ $membre->phone }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Email :
                                    </th>
                                    <td>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $membre->email }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mot de Passe :
                                    </th>
                                    <td>
                                        <input type="password" minlength="6" name="password" class="form-control" autocomplete="off"
                                            required>
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
                                            <option value="ADMIN" {{ $membre->is_admin ? "selected" : "" }}>
                                                Admin
                                            </option>
                                            <option value="MEMBRE" {{ $membre->is_admin ? "" : "selected" }}>
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
                                        @if ($membre->is_actif)
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
                                </tr>
                                <tr>
                                    <th>
                                        Adresse :
                                    </th>
                                    <td>
                                        <textarea name="adresse" class="w-100" rows="4"
                                            required>{{ $membre->adresse }}</textarea>
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
                    <button type="submit" class="btn btn-primary bg-primary">
                        Confirmer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach