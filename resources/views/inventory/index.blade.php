@extends('default')

@section('page-title', 'Profil')
@section('hero-title', 'Bienvenue')
@section('hero-subtitle', 'Lorem Ipsum')

@section('content')
    <section>
        <div class="container mt-100 mb-50">
            <div class="row">
                <div class="col-md-12">
                    <div class="single_post">
                        @foreach($products as $product)
                            <p>{{ $product->title }}</p>
                            <p>{{ $product->description }}</p>
                            <p>{{ $product->pivot->quantity }}</p>
                        @endforeach
                        <br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection