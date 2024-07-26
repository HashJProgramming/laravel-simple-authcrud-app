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

                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Product</h1>
                    <div>
                        @if(session()->has('success'))
                        <div>
                            {{session('success')}}
                        </div>
                        @endif
                    </div>
                    <div>
                        <a href="{{route('product.create')}}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Create a Product</a>
                    </div>
                    <table class="mt-4 border-collapse border border-gray-300">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Name</th>
                            <th class="border border-gray-300 px-4 py-2">Qty</th>
                            <th class="border border-gray-300 px-4 py-2">Price</th>
                            <th class="border border-gray-300 px-4 py-2">Description</th>
                            <th class="border border-gray-300 px-4 py-2">Edit</th>
                            <th class="border border-gray-300 px-4 py-2">Delete</th>
                        </tr>
                        @foreach($products as $product )
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{$product->id}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$product->name}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$product->qty}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$product->price}}</td>
                            <td class="border border-gray-300 px-4 py-2">{{$product->description}}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{route('product.edit', ['product' => $product])}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit</a>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                    @csrf
                                    @method('delete')
                                    <input class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150" type="submit" value="Delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>