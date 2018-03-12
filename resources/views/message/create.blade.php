@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Envoi de messages</div>
			<div class="small-title white-text">Envoyez un message à n'importe qui dans le monde</div>
		</div>
	</div>
	<section>
		<div class="container">
			<div class="section-padding">
				<div class="top-line"></div>
			</div>

			<div class="row  text-center ">
				<div class="col-md-12">
					<h4 class="playfair-text mt-30">Envoyer un message</h4>
						@include('partials.error')
 <div>
        {!! html()->form()->action(route('messages.store'))->open() !!}
            <div>
                {!! html()->label('Votre message', 'content') !!}
                {!! html()->textarea('content')->required() !!}
            </div>
            {!! html()->submit('Envoyer') !!}
        {!! html()->form()->close() !!}
    </div>
						<br>
						<br><br>
						<br><br>
						<br>
				</div>
			</div><!-- end row -->
		</div>
</section>