@extends('default')

@section('content')
    {!! html()->form()->action(route('admin.products.store'))->open() !!}
        <div>
            {!! html()->label('Référence', 'reference') !!}
            {!! html()->text('reference')->required() !!}
        </div>
        <div>
            {!! html()->label('Titre', 'title') !!}
            {!! html()->text('title')->required() !!}
        </div>
        <div>
            {!! html()->label('Description', 'description') !!}
            {!! html()->textarea('description')->required() !!}
        </div>
        <div>
            {!! html()->label('Prix', 'price') !!}
            {!! html()->input('number', 'price')->required() !!}
        </div>
        <div>
            {!! html()->label('Taux de TVA', 'tax_rate') !!}
            {!! html()->input('number', 'tax_rate')->required() !!}
        </div>
        <div>
            {!! html()->label('Image', 'picture') !!}
            {!! html()->file('picture')->required() !!}
        </div>
        {!! html()->submit('Créer') !!}
    {!! html()->form()->close() !!}
@endsection