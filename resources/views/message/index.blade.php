@extends('default')

@section('page-title', 'Messages reçus')
@section('hero-title', 'Boite de réception')
@section('hero-subtitle', 'Voici tous vos messages reçus')

@section('content')
    <section>
        <div class="container mt-100 mb-50 pb-50">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>

            <div class="row  text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Vos messages</h4>
                    @include('partials.error')
                    Consultez les messages que vous avez reçu de la part de quelqu'un dans le monde.
                    @foreach($messages as $message)
                        <div>
                            <p>{{ str_limit($message->content) }} {!! html()->a(route('messages.show', $message), 'Lire le message') !!}</p>
                        </div>
                    @endforeach
                    {!! $messages->links() !!}
                    {!! html()->a(route('messages.create'), 'Ecrire un nouveau message') !!}
                    <br>
                    <br><br>
                    <br><br>
                    <br>
                </div>
            </div><!-- end row -->
        </div>
    </section>
@endsection