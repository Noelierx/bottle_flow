@extends('default')

@section('page-title', 'Commandes')
@section('hero-title', 'Historique des commandes')
@section('hero-subtitle', 'Visualiser toutes vos commandes')

@section('content')
    <section>
        <div class="container mt-100 mb-50">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="single_post">
                        @foreach($orders as $order)
                            <div>
                                <p>Commande du {{ $order->created_at }}</p>
                                {!! html()->a(route('orders.show', $order), 'Voir la commande')!!}
                            </div>
                        @endforeach
                        <br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection