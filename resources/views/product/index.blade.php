@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Bienvenue</div>
			<div class="small-title white-text">Lorem Ipsum</div>
		</div>
	</div>


@section('page-title', 'Produits')

	<!-- POSTS -->
	<section>
		<div class="container mt-100 mb-50">
			<div class="row">
                 @foreach($products as $product)
				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single">
					<img style="width:300px;" class="card-img-top" src="{{ asset('img/' . $product->picture) }}" alt="Card image cap">
					<h5>{{ $product->title }}</h5>
					<p>{{ $product->description }}</p>
                    <p>{!! html()->a(route('products.show', $product), 'Voir plus') !!}</p>
                </div>
                 @endforeach
        </div>
        </div>
        <br><br><br>
</section>

