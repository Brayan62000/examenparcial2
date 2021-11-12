<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //protected $paginationTheme="bootstrap";

    public function index(){
        $libros = Libro::paginate(10);
    
        return view("Livewire.Libros.index",compact("libros"));
    }

    
}
