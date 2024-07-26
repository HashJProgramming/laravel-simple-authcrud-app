<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Create a Product</h1>
                    <div>
                        @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>


                        @endif
                    </div>
                    <form class="mt-4" method="post" action="{{route('product.store')}}">
                        @csrf
                        @method('post')
                        <div>
                            <label>Name</label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="name" placeholder="Name" />
                        </div>
                        <div>
                            <label>Qty</label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="qty" placeholder="Qty" />
                        </div>
                        <div>
                            <label>Price</label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="price" placeholder="Price" />
                        </div>
                        <div>
                            <label>Description</label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" type="text" name="description" placeholder="Description" />
                        </div>
                        <div>
                            <input class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" type="submit" value="Save a New Product" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>