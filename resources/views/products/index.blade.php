<x-layout>

    <h1>Products</h1>

    <a href="{{ route('products.create') }}">New product</a>

    @foreach ($products as $product)

        {{-- php short echo tag to output the various properties of each  product model object --}}
        <h2><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h2>
        <p>{{ $product->description }}</p>
        <p>{{ $product->size }}</p>

    @endforeach

    {{-- show pagination --}}
    {{ $products->links('vendor.pagination.simple-default') }}

</x-layout>
