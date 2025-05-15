<form action="{{route('alumnos.destroy', $alumno)}}" method="post">
    @csrf
    @method('delete')
    <label for="">Seguro que quieres borrar a {{$alumno->nombre_ape}}</label>
    <button type="submit">Si</button>
    <a href="{{route('alumnos.index')}}">No</a>
</form>