@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Historique des commandes</div>
			<div class="small-title white-text">Lorem Ipsum</div>
		</div>
	</div>
<!-- POSTS -->
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