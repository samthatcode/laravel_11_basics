<x-layout>

    <h2>Welcome</h2>

    {{-- short echo tag --}}
    {{-- <a href="<?= route('products.index') ?>">Products</a> --}}

    {{-- blade syntax --}}
    <a href=" {{ route('products.index') }} ">Products</a>

</x-layout>
