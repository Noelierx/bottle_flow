@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Boite de réception</div>
			<div class="small-title white-text">Voici tous vos messages reçus</div>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="section-padding">
				<div class="top-line"></div>
			</div>

			<div class="row  text-center ">
				<div class="col-md-12">
					<h4 class="playfair-text mt-30">Vos messages</h4>
						@include('partials.error')  <div>
        <p>{{ $message->content }}</p>
    </div>
						<br>
						<br><br>
						<br><br>
						<br>
				</div>
			</div><!-- end row -->
		</div>
</section>