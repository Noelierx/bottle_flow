@extends('admin.default')

@section('content')
    @include('admin.partials.error')
    {!! html()->form()->action(route('admin.users.store'))->open() !!}
    <div>
        {!! html()->label('Pseudo', 'pseudo') !!}
        {!! html()->text('pseudo')->required() !!}
    </div>
    <div>
        {!! html()->label('Email', 'email') !!}
        {!! html()->email('email')->required() !!}
    </div>
    <div>
        {!! html()->label('Prénom', 'first_name') !!}
        {!! html()->text('first_name')->required() !!}
    </div>
    <div>
        {!! html()->label('Nom de famille', 'last_name') !!}
        {!! html()->text('last_name')->required() !!}
    </div>
    <div>
        {!! html()->label('Mot de passe', 'password') !!}
        {!! html()->password('password')->required() !!}
    </div>
    <div>
        {!! html()->label('Confirmation du mot de passe', 'password_confirmation') !!}
        {!! html()->password('password_confirmation')->required() !!}
    </div>
    <div>
        {!! html()->label('Pays', 'country') !!}
        {!! html()->select('country', ['France' => 'France', 'Belgique' => 'Belgique'])->required() !!}
    </div>
    <div>
        {!! html()->label('Administrateur')->addChild(html()->checkbox('is_admin')) !!}
    </div>
    {!! html()->submit('Ajouter') !!}
    {!! html()->form()->close() !!}
@endsection