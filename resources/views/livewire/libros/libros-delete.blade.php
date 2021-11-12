<div>
<div>
    <div class="mx-auto card text-white bg-dark" style="width: 24rem;">
    <div class="card-body">
        <h5 class="card-tittle">{{$libro->titulo}}</h5>
        <p class="card-text">{{$libro->autor}}</p>
        <p class="card-text">{{$libro->editorial}}</p>
        <p class="card-text">¿Esta seguro que quiere eliminar este libro?</p>
        <button wire:click="delete" class="btn-sm btn-danger">Confirmar</button>
        <a href="{{route('libros.index')}}" class="btn-sm btn-secondary">Cancelar</a>
    </div>
    </div>
    
</div>
</div>
