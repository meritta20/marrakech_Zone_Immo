@extends('layouts.admin')

@section('content')
<div class="section">
<div class="section-header">
<<<<<<< HEAD
<<<<<<< HEAD
<h1>Céeation de votre fiche de voiture</h1>
=======
<h1>{{__('Creation de votre fiche de voiture')}}</h1>
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
<h1>{{__('Creation de votre fiche de voiture')}}</h1>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
</div>
<div class="container">

        <div class="pt-30 pb-50">

				<div class="container mx-container-4">

					<div class="row">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20">

                            <form action="/scar" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <div class="row">
                                         <div class="">


                                    <div class="form-group row">
                                                <label for="categorie" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('categorie de voiture') }}</label>


<<<<<<< HEAD
<<<<<<< HEAD
                                                    <select name="categorie" class="form-control @error('categorie') is-invalid @enderror" value="{{ old('categorie') }}" name="categorie" id="categorie">
                                                        <option value="Voitures de luxe">Voitures de luxe</option>
                                                        <option value="Transports touristique">Transports touristique</option>
=======
                                                    <select name="categorie" class="c form-control @error('categorie') is-invalid @enderror" value="{{ old('categorie') }}" name="categorie" id="categorie">
                                                        <option id="c1" data="1" value="Voitures de luxe">{{__('Voitures de luxe')}}</option>
                                                        <option id="c2" data="2" value="Transports touristique">{{__('Transports touristique')}}</option>
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
                                                    <select name="categorie" class="c form-control @error('categorie') is-invalid @enderror" value="{{ old('categorie') }}" name="categorie" id="categorie">
                                                        <option id="c1" data="1" value="Voitures de luxe">{{__('Voitures de luxe')}}</option>
                                                        <option id="c2" data="2" value="Transports touristique">{{__('Transports touristique')}}</option>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                                                    </select>

                                                    @error('categorie')
                                                        <span class="invalid-feedback-mx" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="marque" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('marque de voiture') }}</label>
<<<<<<< HEAD
<<<<<<< HEAD
                                            <select name="marque_" class="form-control @error('marque') is-invalid @enderror" value="{{ old('marque') }}" name="marque" id="marque">
                                                        @foreach($marques as  $marque)
                                                            <option value="{{ $marque->libelle }}">{{ $marque->libelle }}</option>
                                                        @endforeach
                                                        <option value="...">autre</option>
=======
                                            <select name="marque_" class=" mc form-control @error('marque') is-invalid @enderror" value="{{ old('marque') }}" name="marque" id="marque">
                                                        @foreach($marques as  $marque)
                                                            <option class="op" data="{{$marque->categorie_id}}" value="{{ $marque->libelle }}">{{ $marque->libelle }}</option>
                                                        @endforeach
                                                        <option value="...">{{__('autre')}}</option>
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
                                            <select name="marque_" class=" mc form-control @error('marque') is-invalid @enderror" value="{{ old('marque') }}" name="marque" id="marque">
                                                        @if(isset($marques))
                                                        @foreach($marques as  $marque)
                                                            <option class="op" data="{{$marque->categorie_id}}" value="{{ $marque->libelle }}">{{ $marque->libelle }}</option>
                                                        @endforeach
                                                        @endif
                                                        <option value="...">{{__('autre')}}</option>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                                            </select>

                                            <input id="marque_sub" type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ old('marque') }}"  autocomplete="marque" hidden>

                                            @error('marque')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="etat" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('etat de voiture') }}</label>


                                            <input id="etat" type="text" class="form-control @error('etat') is-invalid @enderror" name="etat" value="{{ old('etat') }}"  autocomplete="etat">

                                            @error('etat')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="numm_immat" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __("numero d'immatricule") }}</label>


                                            <input id="numm_immat" type="text" class="form-control @error('numm_immat') is-invalid @enderror" name="numm_immat" value="{{ old('numm_immat') }}"  autocomplete="numm_immat">

                                            @error('numm_immat')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="nbr_place" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('nombre de places de voiture') }}</label>


                                            <input id="nbr_place" type="number" class="form-control @error('nbr_place') is-invalid @enderror" name="nbr_place" value="{{ old('nbr_place') }}"  autocomplete="nbr_place">

                                            @error('nbr_place')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="kilometrage" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('kilometrage(km/h)') }}</label>


                                            <input id="kilometrage" type="text" class="form-control @error('kilometrage') is-invalid @enderror" name="kilometrage" value="{{ old('kilometrage') }}"  autocomplete="kilometrage">

                                            @error('kilometrage')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
<<<<<<< HEAD
                                        <label for="prix_min" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('prix minimale pour jour') }}</label>
=======
                                        <label for="prix_min" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('prix minimale pour jour') }}($)</label>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5


                                            <input id="prix_min" type="text" class="form-control @error('prix_min') is-invalid @enderror" name="prix_min" value="{{ old('prix_min') }}"  autocomplete="prix_min">

                                            @error('prix_min')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
<<<<<<< HEAD
                                        <label for="prix_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('prix maximale pour jour') }}</label>
=======
                                        <label for="prix_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('prix maximale pour jour') }}($)</label>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5


                                            <input id="prix_max" type="text" class="form-control @error('prix_max') is-invalid @enderror" name="prix_max" value="{{ old('prix_max') }}"  autocomplete="prix_max">

                                            @error('prix_max')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="days_separator" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('jours separante entre prix max et min') }}</label>
<<<<<<< HEAD
<<<<<<< HEAD


                                            <input id="days_separator" type="text" class="form-control @error('days_separator') is-invalid @enderror" name="days_separator" value="{{ old('days_separator') }}"  autocomplete="days_separator">

                                            @error('days_separator')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="chare_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('charge maximale de voiture') }}</label>
=======
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e


                                            <input id="days_separator" type="text" class="form-control @error('days_separator') is-invalid @enderror" name="days_separator" value="{{ old('days_separator') }}"  autocomplete="days_separator">

                                            @error('days_separator')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
<<<<<<< HEAD
                                        <label for="couleur" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('couleur de voiture') }}</label>
=======
                                        <label for="chare_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('charge maximale de voiture') }}</label>
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5


                                            <input id="days_separator" type="text" class="form-control @error('days_separator') is-invalid @enderror" name="days_separator" value="{{ old('days_separator') }}"  autocomplete="days_separator">

                                            @error('days_separator')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
{{-- 
                                    <div class="form-group row">
<<<<<<< HEAD
<<<<<<< HEAD
                                        <label for="pic_src" class="text-md-left text-md-left col-form-label text-md-left">{{ __('image officielle de voiture') }}</label>
=======
                                        <label for="couleur" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('couleur de voiture') }}</label>
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
                                        <label for="chare_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('charge maximale de voiture') }}{{  __("Kg") }}</label>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5


                                            <input id="chare_max" type="text" class="form-control @error('chare_max') is-invalid @enderror" name="chare_max" value="{{ old('chare_max') }}"  autocomplete="chare_max">

                                            @error('chare_max')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div> --}}

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('image officielle de voiture') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview" class="image-preview mx-image-preview">
                                            <label for="image-upload" id="image-label">Image ici</label>
                                            <input id="image-upload" type="file" class=" @error('pic_src') is-invalid @enderror" name="pic_src" value="{{ old('pic_src') }}"  autocomplete="pic_src">

                                            @error('pic_src')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
=======
                                    <div class="form-group row">
                                        <label for="couleur" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('couleur de voiture') }}</label>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 1') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_1" class="image-preview mx-image-preview">
                                            <label for="image-upload_1" id="image-label_1">Image ici</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

<<<<<<< HEAD
                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
                 
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 2') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_2" class="image-preview mx-image-preview">
                                            <label for="image-upload_2" id="image-label_2">Image ici</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 3') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_3" class="image-preview mx-image-preview">
                                            <label for="image-upload_3" id="image-label_3">Image ici</label>
                                            <input id="image-upload_3" type="file" class=" @error('img_3') is-invalid @enderror" name="img_3" value="{{ old('img_3') }}"  autocomplete="img_3">

                                            @error('img_3')
=======
                                            <input id="couleur" type="color" class="form-control @error('couleur') is-invalid @enderror" name="couleur" value="{{ old('couleur') }}"  autocomplete="couleur">

                                            @error('couleur')
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
<<<<<<< HEAD

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 4') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_4" class="image-preview mx-image-preview">
                                            <label for="image-upload_4" id="image-label_4">Image ici</label>
                                            <input id="image-upload_4" type="file" class=" @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">

                                            @error('img_4')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
{{-- 
                                    <div class="form-group row">
                                        <label for="img_1" class="text-md-left text-md-left col-form-label text-md-left">{{ __('images secondaire 1') }}</label>
=======
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('image officielle de voiture') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview" class="image-preview mx-image-preview">
                                            <label for="image-upload" id="image-label">{{__('Image ici')}}</label>
                                            <input id="image-upload" type="file" class=" @error('pic_src') is-invalid @enderror" name="pic_src" value="{{ old('pic_src') }}"  autocomplete="pic_src">
<<<<<<< HEAD
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5

                                            @error('pic_src')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 1') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_1" class="image-preview mx-image-preview">
                                            <label for="image-upload_1" id="image-label_1">{{__('Image ici')}}</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                                    <div class="form-group row">
                                        <label for="img_2" class="text-md-left text-md-left col-form-label text-md-left">{{ __('images secondaire 2') }}</label>


                                            <input id="img_2" type="file" class="form-control @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">
=======
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                 
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 2') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_2" class="image-preview mx-image-preview">
                                            <label for="image-upload_2" id="image-label_2">{{__('Image ici')}}</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">
<<<<<<< HEAD
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                                    <div class="form-group row">
                                        <label for="img_3" class="text-md-left text-md-left col-form-label text-md-left">{{ __('images secondaire 3') }}</label>
=======
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 3') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_3" class="image-preview mx-image-preview">
                                            <label for="image-upload_3" id="image-label_3">{{__('Image ici')}}</label>
                                            <input id="image-upload_3" type="file" class=" @error('img_3') is-invalid @enderror" name="img_3" value="{{ old('img_3') }}"  autocomplete="img_3">

                                            @error('img_3')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>

<<<<<<< HEAD
<<<<<<< HEAD
                                    <div class="form-group row">
                                        <label for="img_4" class="text-md-left text-md-left col-form-label text-md-left">{{ __('images secondaire 4') }}</label>


                                            <input id="img_4" type="file" class="form-control @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">
=======
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 4') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_4" class="image-preview mx-image-preview">
                                            <label for="image-upload_4" id="image-label_4">{{__('Image ici')}}</label>
                                            <input id="image-upload_4" type="file" class=" @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">
<<<<<<< HEAD
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5

                                            @error('img_4')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
 --}}
                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary" name="create_car">Créer</button>
=======
                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary" name="create_car">{{__('Creer')}}</button>
>>>>>>> 512121a7076de205ccca18f94cedb32c9c2bd09e
=======
                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary" name="create_car">{{__('Creer')}}</button>
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
                                    </div>
                                   </div>
                                </div>

                                </form>


						</div>


					</div>

				</div>

			</div>

		</div>
</div>
@endsection
