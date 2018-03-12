@extends('admin.default')

@section('content')
    @include('admin.partials.error')
    {!! html()->form('PUT', route('admin.products.update', $product))->attribute('enctype', 'multipart/form-data')->open() !!}
    <div>
        {!! html()->label('Référence', 'reference') !!}
        {!! html()->text('reference', $product->reference)->required() !!}
    </div>
    <div>
        {!! html()->label('Titre', 'title') !!}
        {!! html()->text('title', $product->title)->required() !!}
    </div>
    <div>
        {!! html()->label('Description', 'description') !!}
        {!! html()->textarea('description', $product->description)->required() !!}
    </div>
    <div>
        {!! html()->label('Prix', 'price') !!}
        {!! html()->input('number', 'price', $product->price)->required() !!}
    </div>
    <div>
        {!! html()->label('Taux de TVA', 'tax_rate') !!}
        {!! html()->input('number', 'tax_rate', $product->tax_rate)->required() !!}
    </div>
    <div>
        {!! html()->label('Type de produit', 'type') !!}
        {!! html()->select('type', $types, $product->type->id)->required() !!}
    </div>
        {!! html()->img($product->picture_url) !!}
    <div>
        {!! html()->label('Image', 'picture') !!}
        {!! html()->file('picture')->attribute('accept', 'image/*') !!}
    </div>
    {!! html()->submit('Modifer') !!}
    {!! html()->form()->close() !!}
@endsection