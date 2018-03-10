@extends('default')

@section('content')
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
@endsection