@extends('default')

@section('page-title', 'Produits')

@section('content')
    @foreach($products as $product)
        <div>
            <p>{{ $product->title }}</p>
            <p>{{ $product->description }}</p>
            {!! html()->element('img')->attribute('href', $product->picture)->attribute('alt', $product->picture) !!}
            {!! html()->a(route('products.show', $product), 'Voir plus') !!}
        </div>
    @endforeach
@endsection