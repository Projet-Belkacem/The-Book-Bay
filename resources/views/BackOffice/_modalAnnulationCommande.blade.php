<div class="modal" id="annulation-commande-{{ $commande->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white">
                    <b>
                        Commande #CMD-REF-CR{{ $commande->id }}
                    </b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Ceci entrainera l'annulation de la commande.
                    <br>
                    En êtes-vous sûr de cela ??
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">
                    Annuler
                </button>
                <form action="{{ route('annulation_commande', ['commande'=> $commande->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>