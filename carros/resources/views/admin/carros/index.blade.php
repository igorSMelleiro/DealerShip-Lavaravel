@extends('layout.site')
@section('titulo','Listagem')
@section('conteudo')

<div class="container">
<h3 class="alert alert-light text-center">Lista de Carros</h3>
<div class="row">
<table class="table">
<thead>

<tr>
<th scope="col">ID</th>
<th scope="col">Imagem</th>
<th scope="col">Marca</th>
<th scope="col">Modelo</th>
<th scope="col">Ano</th>
<th scope="col">Placa</th>
<th scope="col">Valor</th>
<th scope="col">Ação</th>
</tr>

</thead>

<tbody>
@forelse($registros as $registro)
<tr>
<td>{{ $registro->id }}</td>
<td><img width="80"
src="{{asset($registro->imagem) }}"
alt="{{ $registro->modelo }}"/></td>
<td>{{ $registro->marca }}</td>
<td>{{ $registro->modelo }}</td>
<td>{{ $registro->ano }}</td>
<td>{{ $registro->placa }}</td>
<td>{{ number_format($registro->valor, 2, ',', '.') }}</td>
<td><a class="btn btn-warning" href="#">Editar</a>
<a class="btn btn-danger" href="#" onclick="return
confirm('Tem certeza que deseja deletar esse registro?');">Deletar</a>
</td>
</tr>
@empty
<h4>Nenhum carro cadastrado</h4>
@endforelse
</tbody>

<a class="btn btn-warning text-black" href="#">Editar</a>
<a class="btn btn-danger" href="#" onclick="return confirm('Tem certeza que deseja deletar esse registro?');">Deletar</a>
    </td>
        </tr>
            </tbody>
                </table>
             <div class="row">
             <a class="btn btn-success" href="{{route('admin.carros.adicionar')}}">Adicionar</a>
                </div>
                    </div>
                        </div>
@endsection