@extends('default')

@section('content')
    <!-- HERO SECTION  -->
    <div class="site-hero_2 parallax bg-dark">
        <div class="page-title">
            <div class="big-title white-text">Paiement</div>
            <div class="small-title white-text">Procéder au paiement</div>
        </div>
    </div>
    <!-- POSTS -->
    <section>
        <div class="container mt-100 mb-50">
            <div class="row">
                {!! html()->form()->action(route('orders.store'))->id('payment-form')->open() !!}
                <script
                    src="https://checkout.stripe.com/checkout.js"
                    class="stripe-button"
                    data-key="{{ config('services.stripe.key') }}"
                    data-name="Bottle flow"
                    data-description="{{ Cart::count() }} item(s)"
                    data-zip-code="true"
                    data-currency="eur"
                    data-amount="{{ Cart::total() * 100 }}"
                    data-locale="auto"
                    data-email="{{ Auth::user()->email }}"
                    data-allowRememberMe="false">
                </script>
                {!! html()->form()->close() !!}
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/>
    </section>
@endsection