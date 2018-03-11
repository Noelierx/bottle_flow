@extends('default')
<!-- HERO SECTION  -->
    <div class="site-hero_2 parallax bg-dark">
        <div class="page-title">
            <div class="big-title white-text">Inscription</div>
            <div class="small-title white-text">Jetez vous à l'eau !</div>
        </div>
    </div>

@section('page-title', 'Inscription')

@section('content')
    @include('partials.error')
    {!! html()->form()->action(route('auth.register'))->open() !!}
    <section  class="sign-form">
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
    </section>
        {!! html()->submit('S\'inscrire') !!}
    {!! html()->form()->close() !!}
@endsection

