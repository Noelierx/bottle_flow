@extends('default')

@section('page-title', 'Mot de passe')
@section('hero-title', 'Mot de passe')
@section('hero-subtitle', 'Changer mon mot de passe')

@section('content')
    <section class="sign-form">
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Renseignez votre adresse mail ainsi que votre nouveau mot de passe.</h4>
                    
                    {!! html()->form()->action(route('auth.reset'))->open() !!}
                    {!! html()->hidden('token', $token)->required() !!}
                    <div>
                        {!! html()->label('Votre email') !!}
                        {!! html()->email('email', $email)->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Votre nouveau mot de passe') !!}
                        {!! html()->password('password')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Confirmez votre nouveau mot de passe') !!}
                        {!! html()->password('password_confirmation')->required() !!}
                    </div>
                    {!! html()->submit('Valider') !!}
                    {!! html()->form()->close() !!}
                    <br>
                    <br><br>
                    <br><br>
                    <br>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection