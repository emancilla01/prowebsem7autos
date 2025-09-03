@extends('plantillas.plantilla1')
@section('menu')
    @include('menu1')
@endsection
@section('contenido1')
    <form action="" method="post">
    <div class="row mb-3" >
        <label class="col" for="" class="form-label">RFC</label>
        <input class="col" type="text" class="form-control"></input>
        <label class="col" for="" class="form-label">Nombre</label>
        <input class="col" type="text" class="form-control"></input>
        <label class="col" for="" class="form-label">Telefono</label>
        <input class="col" type="text" class="form-control"></input>
        <label class="col" for="" class="form-label">email</label>
        <input class="col" type="text" class="form-control"></input>
    </div>
</form>
@endsection





