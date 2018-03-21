@extends('default')

@section('page-title', 'Connexion')
@section('hero-title', 'Connexion')
@section('hero-subtitle', 'Connectez-vous pour utiliser nos services.')

@section('content')
    <!-- CONNEXION -->
    <section>
        <div class="container mt-100 mb-50">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Entrez votre adresse mail et votre mot de passe pour accéder au  site.</h4>
                </div>
                <div class="sign-form">
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
                </div>
            </div><!-- end row -->
        </div>
</section>
@endsection

