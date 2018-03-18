@extends('default')

@section('page-title', 'Connexion')
@section('hero-title', 'Connexion')
@section('hero-subtitle', 'Connectez-vous pour utiliser nos services.')

@section('content')
    <!-- CONNEXION -->
    <section>
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Un texte random pour faire joli</h4>
                    {!! html()->form()->action(route('auth.login'))->open() !!}
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
                    {!! html()->submit('Se connecter') !!}
                    {!! html()->form()->close() !!}
                    {!! html()->a(route('auth.showLinkRequestForm'))->addChild('Mot de passe oublié') !!}
                    <br>
                    <br><br>
                    <br><br>
                    <br>
                </div>
            </div><!-- end row -->
        </div>
@endsection