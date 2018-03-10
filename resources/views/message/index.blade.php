@extends('default')

@section('content')
    @foreach($messages as $message)
        <div>
            <p>{{ str_limit($message->content) }} {!! html()->a(route('messages.show', $message), 'Lire le message') !!}</p>
        </div>
    @endforeach
    {!! $messages->links() !!}
    {!! html()->a(route('messages.create'), 'Nouveau message') !!}
@endsection