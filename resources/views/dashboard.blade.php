<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mx-5 my-8">
        <div class="flex justify-between">
            <h1 class="font-bold text-4xl mb-8">List Product</h1>
            <a href="{{ route('product.create') }}" class="btn btn-primary text-lg">Tambah Produk</a>
        </div>
        <div class="flex flex-row">
            @foreach ($products as $product)
        <div class="card card-compact bg-base-100 mx-4 w-96 shadow-xl">
            <figure>
              <img
                src="{{$product->gambar}}"
                alt="Shoes" />
            </figure>
            <div class="card-body">
              <h2 class="card-title">{{$product->nama}}</h2>
              <p>{{$product->desc}}</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>
</x-app-layout>
