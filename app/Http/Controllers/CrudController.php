<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;


class CrudController extends Controller
{
    //
    public function create_function(){
        return view('productos.create');
    }
    public function store_function(ProductFormRequest $request){
        $data = $request ->validated();

        $product = Producto::create($data); 
        return redirect('/agregar-producto')->with('message','producto añadido correctamente'); 
    }
}
