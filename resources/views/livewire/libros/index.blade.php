<div>
    <table class="table text-center table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Editorial</th>
        <th scope="col">Autor</th>
        <th scope="col">Fecha de lanzamiento</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($libros as $libro)
            <tr>
            <th scope="row">{{$libro->id}}</th>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->editorial}}</td>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->fecha_lanzamiento}}</td>
            <td>
                <a class="btn-sm btn-secondary" href="{{route('libros.view',$libro)}}">Mostrar</a>
                <a class="btn-sm btn-danger" href="{{route('libros.delete',$libro)}}">Eliminar</a>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{$libros->links()}}
</div>
