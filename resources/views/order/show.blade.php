@extends('default')

@section('content')
    @foreach($order->products as $product)
        <div>
            <p>{{ $product->title }}</p>
            <p>{{ $product->description }}</p>
            <p>Quantité {{ $product->pivot->quantity }}</p>
        </div>
    @endforeach
@endsection