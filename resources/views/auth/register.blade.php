@extends('default')

@section('page-title', 'Inscription')
@section('hero-title', 'Inscription')
@section('hero-subtitle', 'Inscivez-vous pour utiliser nos services.')

@section('content')
    <section>
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row  text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">En créant votre compte, vous aurez la possibilité d'envoyer des messages à des gens venant des quatre coins du globe ! Inscrivez-vous dès maintenant pour bénéficier de nos fonctionnalités et bien plus encore.</h4>
                </div>
                <div class="sign-form">
                    {!! html()->form()->action(route('auth.register'))->open() !!}
                    <div>
                        {!! html()->label('Votre pseudonyme', 'pseudo') !!}
                        {!! html()->text('pseudo')->placeholder('pseudo')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Votre email', 'email') !!}
                        {!! html()->email('email')->placeholder('email')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Votre mot de passe', 'password') !!}
                        {!! html()->password('password')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Confirmez votre mot de passe', 'password_confirmation') !!}
                        {!! html()->password('password_confirmation')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Votre prénom', 'first_name') !!}
                        {!! html()->text('first_name')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Votre nom de famille', 'last_name') !!}
                        {!! html()->text('last_name')->required() !!}
                    </div>
                    <div>
                        {!! html()->label('Votre nationalité', 'country') !!}
                        {!! html()->select('country', ['France' => 'France', 'Belgique' => 'Belgique'])->required() !!}
                    </div>
                    {!! html()->submit('S\'inscrire') !!}
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