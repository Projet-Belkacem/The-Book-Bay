@foreach ($membres as $membre)
<div class="modal fade" id="supprimer-membre-{{ $membre->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">
                    Supprimer un Membre
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('supprimer_membre', ['membre'=> $membre->id]) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <p>
                        Êtes-vous bel et bien sûr de vouloir
                        <b>
                            {{ $membre->is_actif ? "bloquer" : "débloquer" }}
                        </b>
                        le membre
                        #MUID{{ $membre->id }}
                        depuis le système d'informations.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        Annuler
                    </button>
                    <button type="submit" class="btn btn-danger bg-danger">
                        Confirmer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach