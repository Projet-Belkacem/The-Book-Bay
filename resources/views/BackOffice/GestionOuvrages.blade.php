@extends('BackOffice._layout_backOffice')

@section('styles')
@endsection

@section('content')
<h2 class="mb-2">
    <u>
        Gestion des ouvrages
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
    @foreach ($ouvrages as $ouvrage)
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="{{ asset($ouvrage->chemin_photo_couverture) }}" alt=".."
                style="width: 100%;height: 200px;">
            <div class="card-body">
                <h5 class="card-title">
                    #OUV{{ $ouvrage->id }}
                    <br>
                    {{ Str::limit($ouvrage->titre, 20, '...') }}
                </h5>
                <div class="row">
                    <div class="col-md-5 text-right" style="font-size:13px;">
                        <p>
                            Prix:
                        </p>
                    </div>
                    <div class="col-md-7">
                        {{ $ouvrage->prix }} (DHS)
                    </div>

                    <div class="col-md-5 text-right" style="font-size:13px;">
                        <p>
                            Auteur:
                        </p>
                    </div>
                    <div class="col-md-7">
                        {{ $ouvrage->auteur }}
                    </div>

                    <div class="col-md-5 text-right" style="font-size:13px;">
                        <p>
                            Stock:
                        </p>
                    </div>
                    <div class="col-md-7">
                        {{ $ouvrage->quantite_actuelle }} pcs
                    </div>

                    <div class="col-md-5 text-right" style="font-size:13px;">
                        <p>
                            Theme:
                        </p>
                    </div>
                    <div class="col-md-7">
                        {{ $ouvrage->theme->libelle }}
                    </div>

                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <button class="btn btn-info bg-info" data-toggle="modal"
                            data-target="#detail-ouvrage-{{ $ouvrage->id }}">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-primary bg-primary" data-toggle="modal"
                            data-target="#modifier-ouvrage-{{ $ouvrage->id }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button>
                        <button class="btn btn-danger bg-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('BackOffice._modalDetailOuvrage')
    @include('BackOffice._modalModifierOuvrage')
    @endforeach
</div>
@endsection

@section('scripts')
@endsection