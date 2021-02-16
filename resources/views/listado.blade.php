@extends('master')
@section('contenido') 
<br>
<center><<h1> Listado de candidatos </h1></center>
<br><br>
<div class="container">
    <div class ="row">
    @foreach($candidato as $p)
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/$p->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $p->nombre }} </h5>
                    <p class="card-text"> Identificador :  {{ $p->id }} </p>
                    <p class="card-text"> Codigo :  {{ $p->cod_candidato }} </p>
                
                    <button type="button" class="btn btn-danger">votar</button>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <br><br>
    <center><a href="{{url('/')}}" class="btn btn-success"> Regresar </a></center>
    <br><br>
</div>
@stop