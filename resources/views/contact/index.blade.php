@extends('default')

@section('content')
    @include('partials.error')
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
@endsection