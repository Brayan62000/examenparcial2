<div>
<div>
<div>
    <div class="mx-auto card text-white bg-dark" style="width: 24rem;">
    <div class="card-body">
        <h6 class="card-tittle">Esta es la informacion del libro seleccionado:</h6>
        <p class="card-text">titulo: {{$libro->titulo}}</p>
        <p class="card-text">Autor: {{$libro->autor}}</p>
        <p class="card-text">Editorial: {{$libro->editorial}}</p>
        <p class="card-text">Fecha de lanzamiento: {{$libro->fecha_lanzamiento}}</p>

        <a href="{{route('libros.index')}}" class="btn-sm btn-secondary">Regresar</a>
    </div>
    </div>
    
</div>
</div>
</div>
