@extends('layouts.base')

@section('content')
  <div class="">
      <h1> <b> Votre lien racourcis est : </b> </h1>

      <p>
          <a href="{{ config('app.url') }}/{{ $shorturl }}">

             {{ config('app.url') }}/{{ $shorturl }}

          </a>
      </p>

  </div>
@endsection
