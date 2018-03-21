@extends('default')

@section('page-title', 'Produits')
@section('hero-title', 'Détails du produit')
@section('hero-subtitle', 'Tous les détails concernant le produit sélectionné')

@section('content')
    <section>
        <div class="container mt-100 mb-50">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="single_post">
                        {!! html()->form()->action(route('cart.row.store'))->open() !!}
                        <div class="post_media">
                            <img class="card-img-top" src="{{ asset('img/' . $product->picture) }}"
                                 alt="Card image cap">
                        </div>
                        <div class="post_title">
                            <h4 class="montserrat-text uppercase">{{ $product->title }}</h4>
                            <span class="post_date">{{ $product->price }} €</span>
                        </div>
                        <p>
                            {{ $product->description }}
                        </p>
                        {!! html()->hidden('product')->value($product->id) !!}
                        {!! html()->submit('Ajouter au panier') !!}
                        {!! html()->form()->close() !!}
                        <br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection