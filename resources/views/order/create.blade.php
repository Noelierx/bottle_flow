@extends('default')
<!-- HERO SECTION  -->
	<div class="site-hero_2 parallax bg-dark">
		<div class="page-title">
			<div class="big-title white-text">Paiment</div>
			<div class="small-title white-text">Lorem Ipsum</div>
		</div>
	</div>
<!-- POSTS -->
	<section>
		<div class="container mt-100 mb-50">
			<div class="row">
				{!! html()->form()->action(route('orders.store'))->open() !!}
        @include('partials.error')
        <div>
            {!! html()->label('Code de carte', 'card') !!}
            {!! html()->text('card')->required() !!}
        </div>
        <div>
            {!! html()->label('Code secret', 'secret') !!}
            {!! html()->text('secret')->required() !!}
        </div>
        <div>
            {!! html()->label('Date d\'expiration', 'date') !!}
            {!! html()->date('date')->required() !!}
        </div>
        {!! html()->submit("Payer") !!}
    {!! html()->form()->close() !!}
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/>
</section>