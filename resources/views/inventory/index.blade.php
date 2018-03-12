@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Bienvenue</div>
			<div class="small-title white-text">Lorem Ipsum</div>
		</div>
	</div>


@section('page-title', 'Profil')

	<!-- POSTS -->
	<section>
		<div class="container mt-100 mb-50">
			<div class="row">
				<div class="col-md-12">
					<div class="single_post">
						@foreach($products as $product)
                            <p>{{ $product->title }}</p>
                            <p>{{ $product->description }}</p>
                            <p>{{ $product->pivot->quantity }}</p>
                        @endforeach
                        <br/><br/><br/>
					</div>
                </div>
            </div>
        </div>
</section>