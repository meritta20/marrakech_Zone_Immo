@extends('layouts.app')
 
@section('carousel-section')
@php
	$str ="";
@endphp
@if($home_carasoul[0]->id == 2)
	@php
		$str ="/storage/";
	@endphp
@endif
<style>
	/* .carousel { z-index: -99; } keeps this behind all content */

	.carousel .one {
		background: url({{ $str }}{{ $home_carasoul[0]->first_img }});
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		-moz-background-size: cover;
	}

	.carousel .two {
		background: url({{ $str }}{{ $home_carasoul[0]->sec_img }});
		background-size: cover;
		background-repeat: no-repeat;

		background-position: center;

		-moz-background-size: cover;
	}

	.carousel .three {
		background: url({{ $str }}{{ $home_carasoul[0]->third_img }});
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}

	.carousel .four {
		background: url({{ $str }}{{ $home_carasoul[0]->fourth_img }});
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
    }
    .carousel .five {
		background: url({{ $str }}{{ $home_carasoul[0]->fifth_img }});
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}
	.fas .fa-star{
		background-color:#C89005;
	}
	.icon:hover{
		color: orangered !important;
	}

</style>
 
<!-- Carousel
                ================================================== -->
<div id="myCarousel" class="carousel slide hero" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>

	</ol>
	<div class="carousel-inner" role="listbox" style="height:40vh">
		<div class="item one active d-block w-100">
			<!-- <img class="first-slide
					" src="{{ asset('/') }}images/bg/bg1.jpg"  alt="First slide">
  -->
			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__('Acquérir votre bien à Marrakech')}}</p>

			</div>

		</div>
		<div class="item two d-block w-100">
			<!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__('locations saisonnières dans une villas luxueuses à Marrakech')}}</p>
			</div>
		</div>
		<div class="item three d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__('ventes et achats des biens immobilier')}}</p>
			</div>
		</div>
		<div class="item four d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__("Ventes Riad")}}</p>
			</div>
        </div>
        <div class="item five d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__("Transport et location")}}</p>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- /.carousel -->
@endsection

@section('content')
<div class="filter-full-width-wrapper">


				
					<div class="filter-full-primary">
					
						<div class="container">
					
							<div class="filter-full-primary-inner">
							
								<div class="form-holder">
								
									<div class="row">
									
										<div class="col-xs-12 col-sm-12 col-md-6">
										
											<div class="filter-item bb-sm no-bb-xss">
											
												<div class="input-group input-group-addon-icon no-border no-br-sm">
													<span class="input-group-addon input-group-addon-icon bg-white"><label><i class="fa fa-map-marker"></i> Ville:</label></span>
													<input type="text" class="form-control" id="autocompleteTagging" value="Marrakech" placeholder="" readonly/>
												</div>
											
											</div>
											
										</div>

									 

									</div>
								
								</div>
								
								<div class="btn-holder">
									<span class="btn btn-toggle btn-refine collapsed" data-toggle="collapse" data-target="#refine-result">Advance Filter</span>
								</div>
							
							</div>
							 
						</div>
					 
 						 <!-- <button type="submit" class="btn btn-primary">Ok</button> -->
					</div>
 
					<div class="filter-full-secondary">
						
						<div id="refine-result" class="collapse">
						
							<div class="container"> 
						
								<div class="collapse-inner clearfix">
								
									<div class="row">
									
										<div class="col-xs-12 col-sm-12 col-md-8">
										
											<div class="row">
											
												<div class="col-xss-12 col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Input Form</label>
														<input type="text" class="form-control" placeholder="Placeholder">
													</div>
												</div>
												
												<div class="col-xss-12 col-xs-6 col-sm-6">
													<div class="form-group">
														<label>No. of traveller</label>
														<div class="form-group form-spin-group">
															<input type="text" class="form-control form-spin" value="1" /> 
														</div>
													</div>
												</div>
												
												<div class="col-xss-12 col-xs-6 col-sm-6">
													<div class="form-group">
														<label>Select</label>
														<select class="selectpicker show-tick form-control" title="Select placeholder">
															<option value="0">Select Option 1</option>
															<option value="1">Select Option 2</option>
															<option value="2">Select Option 3</option>
															<option value="3">Select Option 4</option>
														</select>
													</div>
												</div>
												
												<div class="col-xss-12 col-xs-6 col-sm-6">
												
													<div class="form-group">
														<label>Select Multiply</label>
														<select id="filter_image_type" class="selectpicker show-tick form-control" title="Select placeholder" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" multiple>
															<option value="0">Select Option 1</option>
															<option value="1">Select Option 2</option>
															<option value="2">Select Option 3</option>
															<option value="3">Select Option 4</option>
														</select>
													</div>

												</div>
											
											</div>
										
										</div>
										
										<div class="col-xs-12 col-sm-12 col-md-4">
										
											<div class="row">
											
												<div class="col-xss-12 col-xs-6 col-sm-6 col-md-12">
												
													<div class="form-group">
														<label>Range Slider</label>
														<div class="sidebar-module-inner">
															<input id="price_range" />
														</div>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-6 col-sm-6 col-md-12">
												
													<div class="form-group">
														<label>Range Slider</label>
														<div class="sidebar-module-inner">
															<input id="star_range" />
														</div>
													</div>
													
												</div>
												
											</div>
											
										</div>

										<div class="col-xs-12 col-sm-12 mb-10">
										
											<div class="bb mb-20"></div>
											
											<label>Checkbox</label>
											<div class="row checkbox-wrapper">
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-1" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-1">Checkbox One</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-2" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-2">Checkbox Two</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-3" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-3">Checkbox Three</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-4" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-4">Checkbox Four</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-5" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-5">Checkbox Five</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-6" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-6">Checkbox Six</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-7" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-7">Checkbox Seven</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-8" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-8">Checkbox Eight</label>
													</div>
												</div>
												<div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
													<div class="checkbox-block">
														<input id="filter_checkbox-9" name="filter_checkbox" type="checkbox" class="checkbox"/>
														<label class="" for="filter_checkbox-9">Checkbox Nine</label>
													</div>
												</div>
											</div>
										</div>

									</div>
									
								</div>
							
							</div>
						
						</div>
						
					</div>
 
				
				
			</div>
			<div class="container mx-container-1">

	<div class="hero-mx-srch">
		<div class="container">

			<div class="form">
                <div class="form-group">
                    <input type="text" placeholder="Immobilier..." class="form-control fmx" title="{{__("Acces rapide!trouvez ici votre preferable immobilier facilement")}}" >
                    <button class="btn"><i class="icon-magnifier"></i></button>
                </div>
                <button class="btn btn-all-mx display-wd">{{ __("Afficher touts") }}</button>
            </div>

		</div>
	</div>
	<div id="link-top" class="pt-30 mx-pt-30 pb-50">

		<div class="container mx-container-2 ">

			<div class="trip-guide-wrapper">

				<div class="GridLex-gap-20 GridLex-gap-15-mdd GridLex-gap-10-xs">

					<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
						@php
						$c_data= 1;
						$key_c = 0;
						@endphp
						@if(isset($immos))
						@foreach ($immos as $key=>$immo)
						@php
						++$key_c;
						@endphp
						<!-- real number  mx-n -->
						@if($key < 20) @php $style="" ; @endphp @else @php $style="display-wd" ; @endphp @endif 
						<!-- real number +1 mx-n -->
							@if($key_c == 21)
							@php
							++$c_data;
							$key_c = 0;
							@endphp
							@endif

							<!-- start car widget -->
							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12_mx-widget {{ $style }}" data-widget="{{ $c_data }}" data-aos="fade-up" data-aos-duration="2000">

								<div class="mx-trip-guide-item trip-guide-item" style="background-color:white">
									<a href="{{route('immo.show',['lang'=>app()->getLocale(),'immobilier'=>$immo->id])}}">
										<div class="trip-guide-image mx-trip-guide-image meri-widget" title="{{ __("cliquez ici pour plus de details") }}">
											<img src="/storage/{{ $immo->pic_src }}" alt="images" />
										</div>
									</a>
									 
 									<div class="trip-guide-content mx-trip-guide-content" style="margin-bottom: 20px;">
										<h3 class="hi">{{ $immo->designation }}</h3><br>
									</div>

									<div class="trip-guide-bottom" style="padding:10px">

										<div class="trip-guide-person mx-trip-guide-person clearfix" style="border: 0px;">
											<i class="fas fa-home"></i>
											<p class="name">{{ __("Nombre d'étage") }} : <span>{{ $immo->nbr_etage }}</span></p>

										</div><div class="trip-guide-person mx-trip-guide-person clearfix" style="border: 0px;">
										<i class="fas fa-home"></i>
											<p class="name">{{ __("Nombre de chambre") }} : <span>{{ $immo->nbr_chambre }}</span></p>

										</div>


										<div class="row gap-10 mx-price">
											<div class="col-xs-12 col-sm-6">
												<div class="trip-guide-price">
													{{ __("Á partir de") }}
													<span class="number">{{ $immo->price_min }}$</span>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 text-right">
												<a href="{{route('reservationVente.create',['lang'=>app()->getLocale(),'immobilier'=>$immo->id])}}" class="btn btn-primary">{{__("Reserver")}}</a>

											</div>
										</div>

									</div>

								</div>

							</div>
							<!-- end car widget -->
							@endforeach
							@endif

					</div>

				</div>

			</div>

			<div class="pager-wrappper clearfix pmx">

				<div class="pager-innner">

					@foreach ($immos as $key=>$immo)
					@php
					++$key;
					@endphp
					@endforeach
					<div class="clearfix tmx">
						{{ __("plus de") }} {{ $key }} {{ __("type d'immobiliers à choisir") }}
                    </div>

                    <div class="clearfix smx display-wd">
                        {{ __("Pas de resultat à afficher pour cette recherche!") }}
                       </div>

					<div class="clearfix tmx">
						<nav class="pager-center">
							<ul class="pagination">
								<li>
									<a href="#link-top" aria-label="prev-pg">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								@php
								$counter_nbr = 1;
								$counter = 0 ;
								@endphp

								@foreach ($immos as $immo)
								@php
								++$counter;
								/* real number +1 mx-n */
								$cm = $counter%21 ;
								@endphp
								@if($cm == 1 or $counter == 1)
								@if($counter == 1)
							<li data-id="page-li" id-pg="{{ $counter_nbr }}" class="active"><a href="#link-top" data-id="page-a" id-pg="{{ $counter_nbr }}">{{ $counter_nbr }}</a></li>
								@else
								<li data-id="page-li" id-pg="{{ $counter_nbr }}"><a href="#link-top" data-id="page-a" id-pg="{{ $counter_nbr }}">{{ $counter_nbr }}</a></li>
								@endif
								@php
								$counter_nbr++;
								@endphp
								@endif
								@endforeach
								<li>
									<a href="#link-top" aria-label="next-pg">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>

				</div>

			</div>

		</div>

	</div>
</div>
<script></script>
<!--   -->
@endsection
