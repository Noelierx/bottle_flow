@extends('admin.table')

@section('top-link', html()->a(route('admin.users.create'), 'Ajouter un utilisateur'))

@section('thead')
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Status</th>
        <th></th>
    </tr>
@endsection

@section('tbody')
    @foreach($users as $user)
        <tr>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->status }}</td>
            <td>
                {!! html()->a(route('admin.users.edit', $user), 'Modifier') !!}
                {!! html()->a(route('admin.users.destroy', $user), 'Supprimer')->attribute('data-method', 'DELETE') !!}
            </td>
        </tr>
    @endforeach
@endsection

@section('pagination', $users->links())