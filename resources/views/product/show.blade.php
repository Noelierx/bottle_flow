@extends('default')

@section('content')
    {!! html()->form()->action(route('cart.row.store'))->open() !!}
        <p>{{ $product->title }}</p>
        <p>{{ $product->description }}</p>
        {!! html()->hidden('product')->value($product->id) !!}
        {!! html()->submit('Ajouter au panier') !!}
    {!! html()->form()->close() !!}
@endsection