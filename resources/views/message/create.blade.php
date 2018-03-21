@extends('default')

@section('page-title', 'Messages')
@section('hero-title', 'Envoi de messages')
@section('hero-subtitle', 'Envoyez un message à n\'importe qui dans le monde')

@section('content')
    <section>
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row  text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Envoyer un message</h4>
                </div>
                <div class="sign-form">
                    <div>
                        {!! html()->form()->action(route('messages.store'))->open() !!}
                        <div>
                            {!! html()->label('Votre message', 'content') !!}
                            {!! html()->textarea('content')->required() !!}
                        </div>
                        {!! html()->submit('Envoyer') !!}
                        {!! html()->form()->close() !!}
                    </div>
                    <br>
                    <br><br>
                    <br><br>
                    <br>
                </div>
            </div><!-- end row -->
        </div>
    </section>
@endsection