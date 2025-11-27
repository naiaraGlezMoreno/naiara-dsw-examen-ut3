<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function store(Request $request)
    {

        // Naiara Gonzalez Moreno ---- Realice las verificaciones
        $validated = $request->validate([
        'nombre-producto' => 'min:3|max:100',
        'precio-producto' => 'max:3000|numeric', 
        'unidades' => 'integer|min:1',
        'categoria-producto' => 'required|in:electronica,deporte'
        ]);
        
        $nombreProducto = $request->input('nombre-producto');
        $descripcionProducto = $request->input('descripcion-producto');
        $categoriaProducto = $request->input('categoria-producto');
        $precioProducto = $request->input('precio-producto');
        // Añadí esta variable para seguir con la estructura del codigo
        $unidades = $request->input('unidades');

        $linea = '"' . $nombreProducto . '";"' . $descripcionProducto . '";"' . $categoriaProducto . '";"' . $precioProducto . '";"' . $unidades ."\"\n"; //Añadí la variable unidades

        file_put_contents(storage_path('app/productos.csv'), $linea, FILE_APPEND);

       return redirect()->route('product.create')->with('status', 'Se han registrado ' . $unidades . ' unidades correctamente.');
       
    }

}