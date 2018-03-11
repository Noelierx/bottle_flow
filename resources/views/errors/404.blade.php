@extends('default')

@section('content')
    <h1>Erreur 404</h1>
    <p>{!! html()->a(route('index'), 'Retour à l\'acceuil') !!}</p>
@endsection