<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        
        $libros = Libro::paginate(10);
        return view('livewire.libros.index',compact("libros"));
    }

    
}
