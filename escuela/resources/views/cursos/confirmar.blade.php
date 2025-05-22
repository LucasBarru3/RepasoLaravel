<form action="{{route('cursos.destroy', $curso)}}" method="post">
    @csrf
    @method('delete')
    <label for="">Seguro que quieres borrar a {{$curso->nombre}}</label>
    <button type="submit">Si</button>
    <a href="{{route('cursos.index')}}">No</a>
</form>