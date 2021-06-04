@extends('layouts.base')

@section('content')
  <h1>Racourcisseur d'URL shortened</h1>
    <form class="" action="" method="post">
    @csrf
      <div class="">
        <input type="text" name="url" placeholder="Entrer l'url a racourcir" value="">
        <input type="submit" name="submt" value="Racourcir mon url">
      </div>
    </form>
@stop
