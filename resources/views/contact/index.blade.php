@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Panier</div>
			<div class="small-title white-text">Lorem Ipsum</div>
		</div>
	</div>

@include('partials.error')
@section('page-title', 'Panier')

	<!-- POSTS -->
	<section>
		<div class="container mt-100 mb-50">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="single_post">
						 {!! html()->form()->action(route('contact.store'))->open() !!}
                        <div>
                            {!! html()->label('Votre prénom', 'first_name') !!}
                            {!! html()->text('first_name')->required() !!}
                        </div>
                        <div>
                            {!! html()->label('Votre nom', 'last_name') !!}
                            {!! html()->text('last_name')->required() !!}
                        </div>
                        <div>
                            {!! html()->label('Votre email', 'email') !!}
                            {!! html()->email('email')->required() !!}
                        </div>
                        <div>
                            {!! html()->label('Votre message', 'content') !!}
                            {!! html()->textarea('content')->required() !!}
                        </div>
                        {!! html()->submit('Envoyer') !!}
                        {!! html()->form()->close() !!}
                        <br/><br/><br/><br/><br/><br/>
					</div>
                </div>
            </div>
        </div>
</section>
    