@extends('admin.default')

@section('content')
    @include('admin.partials.error')
    {!! html()->form('PUT', route('admin.users.update', $user))->open() !!}
    <div>
        {!! html()->label('Pseudo', 'pseudo') !!}
        {!! html()->text('pseudo', $user->pseudo)->required() !!}
    </div>
    <div>
        {!! html()->label('Email', 'email') !!}
        {!! html()->email('email', $user->email)->required() !!}
    </div>
    <div>
        {!! html()->label('Prénom', 'first_name') !!}
        {!! html()->text('first_name', $user->first_name)->required() !!}
    </div>
    <div>
        {!! html()->label('Nom de famille', 'last_name') !!}
        {!! html()->text('last_name', $user->last_name)->required() !!}
    </div>
    <div>
        {!! html()->label('Mot de passe', 'password') !!}
        {!! html()->password('password') !!}
    </div>
    <div>
        {!! html()->label('Confirmation du mot de passe', 'password_confirmation') !!}
        {!! html()->password('password_confirmation') !!}
    </div>
    <div>
        {!! html()->label('Pays', 'country') !!}
        {!! html()->select('country', ['France' => 'France', 'Belgique' => 'Belgique'], $user->country)->required() !!}
    </div>
    <div>
        {!! html()->label('Administrateur')->addChild(html()->checkbox('is_admin', $user->is_admin)) !!}
    </div>
    {!! html()->submit('Modifier') !!}
    {!! html()->form()->close() !!}
@endsection