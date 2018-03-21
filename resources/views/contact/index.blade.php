@extends('default')

@section('page-title', 'Panier')
@section('hero-title', 'Contact')
@section('hero-subtitle', 'Un problème? Contactez nous!')

@section('content')
    <section>
        <div class="container mt-100 mb-50 pb-50">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="sign-form">
                        {!! html()->form()->action(route('contact.store'))->open() !!}
                        <div>
                            {!! html()->label('Votre prénom', 'first_name') !!}
                            {!! html()->text('first_name')->required() !!}
                        </div>
                        <div>
                            {!! html()->label('Votre nom', 'last_name') !!}
                            {!! html()->text('last_name')->required() !!}
                        </div>
                        <div>
                            {!! html()->label('Votre email', 'email') !!}
                            {!! html()->email('email')->required() !!}
                        </div>
                        <div>
                            {!! html()->label('Votre message', 'content') !!}
                            {!! html()->textarea('content')->required() !!}
                        </div>
                        {!! html()->submit('Envoyer') !!}
                        {!! html()->form()->close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    