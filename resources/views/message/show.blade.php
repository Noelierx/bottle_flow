@extends('default')

@section('page-title', 'Messages reçus')
@section('hero-title', 'Boite de réception')
@section('hero-subtitle', 'Voici tous vos messages reçus')

@section('content')
    <section>
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row  text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Vos messages</h4>
                    <p>{{ $message->content }}</p>
                </div>
                <br>
                <br><br>
                <br><br>
                <br>
            </div>
        </div><!-- end row -->
    </section>
@endsection