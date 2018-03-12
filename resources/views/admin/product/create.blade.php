@extends('admin.default')

@section('content')
    @include('admin.partials.error')
    {!! html()->form()->action(route('admin.products.store'))->attribute('enctype', 'multipart/form-data')->open() !!}
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
            {!! html()->label('Type de produit', 'type') !!}
            {!! html()->select('type', $types)->required() !!}
        </div>
        <div>
            {!! html()->label('Image', 'picture') !!}
            {!! html()->file('picture')->attribute('accept', 'image/*')->required() !!}
        </div>
        {!! html()->submit('Créer') !!}
    {!! html()->form()->close() !!}
@endsection