@extends('default')

@section('page-title', 'Messages reçus')
@section('hero-title', 'Boite de réception')
@section('hero-subtitle', 'Voici tous vos messages reçus')

@section('content')
    <section>
        <div class="container">
            <div class="section-padding">
                <div class="top-line"></div>
            </div>

            <div class="row  text-center ">
                <div class="col-md-12">
                    <h4 class="playfair-text mt-30">Vos messages</h4>
                    @include('partials.error')
                    @foreach($messages as $message)
                        <div>
                            <p>{{ str_limit($message->content) }} {!! html()->a(route('messages.show', $message), 'Lire le message') !!}</p>
                        </div>
                    @endforeach
                    {!! $messages->links() !!}
                    {!! html()->a(route('messages.create'), 'Ecrire un nouveau message') !!}<br/>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand
                    un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
                    polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la
                    bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les
                    années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus
                    récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                    <br>
                    <br><br>
                    <br><br>
                    <br>
                </div>
            </div><!-- end row -->
        </div>
    </section>
@endsection