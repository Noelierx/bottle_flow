@extends('default')

@section('content')
    <div>
        {!! html()->form()->action(route('messages.store'))->open() !!}
            <div>
                {!! html()->label('Votre message', 'content') !!}
                {!! html()->textarea('content')->required() !!}
            </div>
            {!! html()->submit('Envoyer') !!}
        {!! html()->form()->close() !!}
    </div>
@endsection