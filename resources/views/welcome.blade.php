@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navigate')
<section>

  <div class="row-fluid">
    <div class="container">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <div class="" align="center">
              @foreach($series as $s)
                <img src="{{$s->photo}}" alt="serie_photo" class="img-responsive img-thumbnail"/>
                <h1>{{$s->serie}}</h1>
                <p>
                  Actors: {{$s->main_actors}} / Extras: {{$s->actors}} / Genre: {{$s->genre}}
                </p>
                <div class='Nunito'><p class='Nunito'>{!! substr( $s->description , 0, 250). '...' !!}</p>
                <div align='center'><a href="series/{{$s->slug}}" class="btn btn-info">Leer más....</a></div>
                <br>
              @endforeach
          </div>
        </div>
    <div class="col-md-2">

    </div>
    </div>
  </div>
</section>
@include('templates.partials.footer')
@stop
