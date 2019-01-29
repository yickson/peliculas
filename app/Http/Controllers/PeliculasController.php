<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function categoria($categoria)
    {
        $category = [
            'drama',
            'comedia',
            'accion',
            'terror'
        ];

        if(!array_search($categoria, $category)){
            return abort(404);
        }else{
            return view('peliculas.categorias')->with('categoria', $categoria);
        }

        // foreach($category as $cat){
            

        //     return $cat == $categoria ? view('peliculas.categorias')->with('categoria', $categoria) : response()->view('errors.404',[],404);
        //     // if($cat == $categoria){
        //     //     return 'Te encuentras en la categoria '.$categoria;
        //     // }else{
        //     //     return response()->view('errors.404',[],404);
        //     // }
        // }
    }
}
