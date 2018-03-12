@extends('default')

@section('content')
    {!! html()->a(route('admin.products.create'), 'Ajouter un produit') !!}
    <table>
        <thead>
        <tr>
            <th>Référence</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Taux de tax</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->reference }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}€</td>
                <td>{{ $product->tax_rate }}%</td>
                <td>
                    {!! html()->a(route('admin.products.edit', $product), 'Modifier') !!}
                    {!! html()->a(route('admin.products.destroy', $product), 'Supprimer')->attribute('data-method', "DELETE") !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $products->links() !!}
@endsection