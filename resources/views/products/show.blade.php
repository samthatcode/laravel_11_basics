<x-layout>

    <h1>{{ $product->name }}</h1>

    <p>{{ $product->description }}</p>

    <p>{{ $product->size }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit Product</a>

    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')

        <button>Delete Product</button>
    </form>

</x-layout>
