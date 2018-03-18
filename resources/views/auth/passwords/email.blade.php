@extends('default')

@section('page-title', 'Mot de passe')
@section('hero-title', 'Mot de passe oublié')
@section('hero-subtitle', 'J\' oublié mon mot de passe')

@section('content')
    <section>
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>
            <div class="row text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Un texte random pour faire joli</h4>
                    {!! html()->form()->action(route('auth.sendResetLinkEmail'))->open() !!}
                    <div>
                        {!! html()->label('Votre adresse email', 'email') !!}
                        {!! html()->email('email')->required() !!}
                    </div>
                    {!! html()->submit('Changer mot de passe') !!}
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