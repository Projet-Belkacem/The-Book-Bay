<div class="modal fade" id="supprimer-ouvrage-{{ $ouvrage->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">
                    Supprimer Ouvrage #OUV{{ $ouvrage->id }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('supprimer_ouvrage', ['ouvrage' => $ouvrage->id]) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        L'action est irréversible.
                        <br>
                        Êtes-vous sûr de vouloir supprimer cet ouvrage : #OUV{{ $ouvrage->id }} ?
                    </div>
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