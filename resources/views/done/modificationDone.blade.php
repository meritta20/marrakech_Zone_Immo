@extends('layouts.admin')

        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div>
 
@section('content')
<div class="container" >

        <div class="container">

            <div class="create-done-wrapper">

                <div class="">

                    <div class="">

                        <div class="icon">
                            <div class="icon-inner">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <h1 class="text-lowercase">{{__('Félicitations!')}}</h1>
                        <p class="lead">{{__('Votre')}} {{ $lib }} {{__('a bien été modifie')}}</p>
                        <h3>{{__('vous pouvez verifier votre modification')}}</h3>
                        <a href="{{$url}}" class="btn btn-primary btn-wide">{{__('verifier ici')}}</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection
