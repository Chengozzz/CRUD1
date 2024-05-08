<?php
//AGREGAR SOFT DELETE MOVIENDO EL MIGRATE PARA QUE SE AGREGUE LA COLUMNA NECESARIA 
//SQLSTATE[42S22]: Column not found: 1054 Unknown column 'producto.deleted_at' in 'where clause'
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;


class CrudController extends Controller
{
    //
    public function index(){
        $products = Producto::all(); 
        return view ('productos.index', compact('products'));
    }
    public function create_function(){
        return view('productos.create');
    }

    public function store_function(ProductFormRequest $request){
        $data = $request ->validated();

        $product = Producto::create($data); 
        return redirect('/agregar-producto')->with('message','producto añadido correctamente'); 
    }

}
