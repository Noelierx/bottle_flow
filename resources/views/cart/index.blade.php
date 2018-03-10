@extends('default')

@section('content')
    {!! html()->form('PUT', route('cart.update'))->open() !!}
        <table>
            <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Prix du produit</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $row)
                <tr>
                    <td>{{ $row->model->title }}</td>
                    <td>{{ $row->model->price }}</td>
                    <td>{!! html()->input('number', "quantities[$row->rowId]", $row->qty) !!}</td>
                    <td>{{ $row->total }}</td>
                    <td>
                        {!! html()->a(route('cart.row.destroy', $row->rowId), 'Supprimer')->attribute('data-method', 'DELETE') !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p>Prix total du panier HT<b>{{ Cart::subTotal() }}</b></p>
        <p>TVA<b>{{ Cart::tax() }}</b></p>
        <p>Prix total du panier <b>{{ Cart::total() }}</b></p>
        {!! html()->submit('Modifier') !!}
    {!! html()->form()->close() !!}
    {!! html()->a(route('cart.destroy'), 'Supprimer ce panier')->attribute('data-method', 'DELETE') !!}
    {!! html()->a(route('orders.create'), 'Payer'); !!}
@endsection