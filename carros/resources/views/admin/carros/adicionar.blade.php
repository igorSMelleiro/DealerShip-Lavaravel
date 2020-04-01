adicionar.blade.php

@extends('layout.site')

@section('titulo','Incluir') 

@section('conteudo')

<div class="container"> <h3 class="alertalert-light text-center" role="alert">Adicionar Carro</h3>



<div class="rowjustify-content-center"> 
<form action="{{route('admin.carros.salvar')}}" 
method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@include('admin.carros._form')

<button class="btnbtn-success">Salvar</button>
    </form> 
        </div> 
           </div>
@endsection