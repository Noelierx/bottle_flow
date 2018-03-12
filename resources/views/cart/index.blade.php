@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Panier</div>
			<div class="small-title white-text">Lorem Ipsum</div>
		</div>
	</div>


@section('page-title', 'Panier')

	<!-- POSTS -->
	<section>
		<div class="container mt-100 mb-50">
			<div class="row">
				<div class="col-md-12">
					<div class="single_post">
						 {!! html()->form('PUT', route('cart.update'))->open() !!}
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nom du produit</th>
                <th scope="col">Prix du produit</th>
                <th scope="col">Quantité</th>
                <th scope="col">Total</th>
                <th scope="col">Actions</th>
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
                        <br/><br/><br/><br/><br/><br/>
					</div>
                </div>
            </div>
        </div>
</section>