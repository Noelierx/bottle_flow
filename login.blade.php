@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Connexion</div>
			<div class="small-title white-text">Connectez-vous pour utiliser nos services.</div>
		</div>
	</div>


@section('page-title', 'Connexion')

@section('content')
@include('partials.error')
{!! html()->form()->action(route('auth.login'))->open() !!}
    <section class="sign-form">
        <div>
            {!! html()->label('Votre email', 'email') !!}
            {!! html()->text('email')->required() !!}
        </div>
        <div>
            {!! html()->label('Votre mot de passe', 'password') !!}
            {!! html()->password('password')->required() !!}
        </div>
        <div>
            {!! html()->label()->addChild('Se souvenir de moi')->addChild(html()->checkbox('remember')) !!}
        </div>
    </section>
        {!! html()->submit('Se connecter') !!}
    {!! html()->form()->close() !!}
    {!! html()->a(route('auth.showLinkRequestForm'))->addChild('Mot de passe oublié') !!}
@endsection