<x-app-layout>
    <div class="mx-5 my-8">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="text-center">
                                <h1 class="text-2xl font-bold">Buat Produk</h1>
                            </div>
                            <div class="my-6">
                                <label class="input input-bordered flex items-center gap-2">
                                    Nama Produk
                                    <input type="text" class="grow" name="nama"/>
                                </label>
                            </div>
                            <div class="my-6">
                                <label class="input input-bordered flex items-center gap-2">
                                    Harga
                                    <input type="text" class="grow" name="harga"/>
                                </label>
                            </div>
                            <div class="my-6">
                                <label class="input input-bordered flex items-center gap-2">
                                    Deskripsi
                                    <input type="text" class="grow" name="desc"/>
                                </label>
                            </div>
                            <div class="my-6">
                                <label class="input input-bordered flex items-center gap-2">
                                    Stok
                                    <input type="text" class="grow" name="stok"/>
                                </label>
                            </div>
                            <div class="my-6">
                                <label class="input input-bordered flex items-center gap-2">
                                    Gambar Produk
                                    <input type="text" class="grow" name="gambar"/>
                                </label>
                            </div>
                            <div class="my-6">
                                <button type="submit" class="text-lg btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
