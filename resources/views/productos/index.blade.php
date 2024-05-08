<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index ') }}
        </h2>
    </x-slot>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
        @forelse ($products as $product)

        {{-- <td>{{$product->id}}</td>
        <td>{{$product->nombre}}</td>
        <td>{{$product->descripcion}}</td>
        <td>{{$product->precio}}</td>
        <td>
            <a href="{{url ('/')}}"clas="btn btn-primary">Editar</a>
        </td>
        <td>
            <a href="{{url ('/')}}"clas="btn btn-danger">Borrar</a>
        </td>
                --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$product->id}}                    </th>
                    <td class="px-6 py-4">
                        {{$product->nombre}}
                    </td>
                    <td class="px-6 py-4">
                        {{$product->descripcion}}
                    </td>
                    <td class="px-6 py-4">
                        {{$product->precio}}  </td>
                    <td class="px-6 py-4">
                        <a href="{{url ('/')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{url ('/')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                    </td>
                </tr>
               
                
                @empty
                <tr>
                    <td colspan= "6" >No productos agregados</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

               {{-- <table class= "table table-bordered">
                    <thead text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400>
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Phone</th>
                            <th scope="col" class="px-6 py-3">Edit</th>
                            <th scope="col" class="px-6 py-3">delete</th>
                        </tr>
                    </thead>
                     <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        @forelse ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->nombre}}</td>
                            <td>{{$product->descripcion}}</td>
                            <td>{{$product->precio}}</td>
                            <td>
                                <a href="{{url ('/')}}"clas="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <a href="{{url ('/')}}"clas="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan= "6" >No productos agregados</td>
                        </tr>
                        @endforelse

                    </table>
                </table> --}}
            </div>
        </div>
    </div>
   
    
    
    </x-app-layout> 