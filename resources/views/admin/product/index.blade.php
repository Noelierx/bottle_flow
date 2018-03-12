@extends('admin.table')

@section('top-link', html()->a(route('admin.products.create'), 'Ajouter un produit'))

@section('thead')
    <tr>
        <th>Référence</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Taux de tax</th>
        <th></th>
    </tr>
@endsection

@section('tbody')
    @foreach($products as $product)
        <tr>
            <td>{{ $product->reference }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}€</td>
            <td>{{ $product->tax_rate }}%</td>
            <td>
                {!! html()->a(route('admin.products.edit', $product), 'Modifier') !!}
                {!! html()->a(route('admin.products.destroy', $product), 'Supprimer')->attribute('data-method', 'DELETE') !!}
            </td>
        </tr>
    @endforeach
@endsection

@section('pagination', $products->links())