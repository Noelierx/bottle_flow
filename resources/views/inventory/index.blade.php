@extends('default')

@section('content')
    @foreach($products as $product)
        <p>{{ $product->title }}</p>
        <p>{{ $product->description }}</p>
        <p>{{ $product->pivot->quantity }}</p>
    @endforeach
@endsection