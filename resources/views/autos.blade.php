@extends('plantillas.plantilla1')
@section('menu')
    @include('menu1')
@endsection

@section('contenido1')
    <form action="" method="post">
        <div class="row mb-3" >
            <label class="col" for="" class="form-label">Num-Serie</label>
            <input class="col" type="text" class="form-control"></input>
            <label class="col" for="" class="form-label">Marca</label>
            <input class="col" type="text" class="form-control"></input>
            <label class="col" for="" class="form-label">Color</label>
            <input class="col" type="text" class="form-control"></input>
            <label class="col" for="" class="form-label">motor</label>
            <input class="col" type="text" class="form-control"></input>
            <label class="col" for="" class="form-label">modelo</label>
            <input class="col" type="text" class="form-control"></input>            
        </div>
    </form>
@endsection


