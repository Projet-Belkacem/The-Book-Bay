@extends('FrontOffice._layout_frontOffice')

@section('main_content')
<div class="section">
    <div class="container">
        <div class="andro_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25071.503655878496!2d-73.59432459840122!3d45.59011831396726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slb!4v1596037698693!5m2!1sen!2slb"></iframe>
        </div>
    </div>
</div>
<!-- FAQ & Contact Form Start -->
<div class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
            </div>
            <div class="col-lg-5 mb-lg-30">
                <div class="section-title">
                    <h4 class="title">FAQ</h4>
                </div>
                <div class="accordion with-gap" id="generalFAQExample">
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalOne"
                            aria-expanded="true" aria-controls="generalOne">
                            Question 1 ?
                        </div>
                        <div id="generalOne" class="collapse show" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh
                                pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,
                                convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalTwo"
                            aria-expanded="false" aria-controls="generalTwo">
                            Question 2
                        </div>
                        <div id="generalTwo" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh
                                pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,
                                convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalThree"
                            aria-expanded="false" aria-controls="generalThree">
                            Question 3 ?
                        </div>
                        <div id="generalThree" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh
                                pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,
                                convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFour"
                            aria-expanded="false" aria-controls="generalFour">
                            Question 4 ?
                        </div>
                        <div id="generalFour" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh
                                pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,
                                convallis at tellus.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFive"
                            aria-expanded="false" aria-controls="generalFive">
                            Question 5 ?
                        </div>
                        <div id="generalFive" class="collapse" data-parent="#generalFAQExample">
                            <div class="card-body">
                                Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh
                                pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,
                                convallis at tellus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title">
                    <h4 class="title">
                        Contactez-nous
                    </h4>
                </div>
                <form action="{{ route('post_contactez_nous') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Nom" class="form-control" name="nom"
                                value="{{ Auth::check() ? Auth::User()->nom : "" }}" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Prénom" class="form-control" name="prenom"
                                value="{{ Auth::check() ? Auth::User()->prenom : "" }}" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" placeholder="Addresse e-mail" class="form-control" name="email"
                                value="{{ Auth::check() ? Auth::User()->email : "" }}" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" placeholder="Sujet" class="form-control" name="sujet" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" class="form-control" placeholder="Votre message" rows="8"
                                required></textarea>
                        </div>
                        @auth
                        <input type="hidden" name="user" value="{{ Auth::User()->id }}">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="bon_commande" class="mb-0">
                                    Bon de Commande :
                                </label>
                                <input type="file" class="form-control" name="bon_commande" id="bon_commande">
                            </div>
                        </div>
                        @endauth
                    </div>
                    <button type="submit" class="andro_btn-custom primary">
                        Soumettre
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('FrontOffice._abonnementNouveaute')
@endsection