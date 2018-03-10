@extends('default')

@section('content')
    @foreach($orders as $order)
        <div>
            <p>Commande du {{ $order->created_at }}</p>
            {!! html()->a(route('orders.show', $order), 'Voir la commande')!!}
        </div>
    @endforeach
@endsection