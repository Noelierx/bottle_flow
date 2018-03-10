@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Connexion</div>
			<div class="small-title white-text">Connectez-vous pour utiliser nos services.</div>
		</div>
	</div>


@section('page-title', 'Connexion')

<!-- CONNEXION -->
	<section>
		<div class="container">
			<div class="section-padding">
				<div class="top-line"></div>
			</div>

			<div class="row  text-center ">
				<div class="col-md-12">
					<h4 class="playfair-text mt-30">Un texte random pour faire joli</h4>
						@include('partials.error')
{!! html()->form()->action(route('auth.sendResetLinkEmail'))->open() !!}
        <div>
            {!! html()->label('Votre adresse email', 'email') !!}
            {!! html()->email('email')->required() !!}
        </div>
        {!! html()->submit('Changer mot de passe') !!}
    {!! html()->form()->close() !!}
						<br>
						<br><br>
						<br><br>
						<br>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>