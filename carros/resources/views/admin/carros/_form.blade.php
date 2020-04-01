<div class="form-group"> 
<label for="marca">Marca</label> 
<input class="w-100" type="text" name="marca" value="{{ isset($registro->marca) ? $registro->marca : '' }}" placeholder="Marca"> 
</div> 

<div class="form-group"> 
<label for="modelo">Modelo</label> 
<input class="w-100" type="text" name="modelo" value="{{ isset($registro->modelo) ? $registro->modelo : '' }}" placeholder="Modelo"> 
</div> 

<div class="form-group"> 
<label for="ano">Ano</label> 
<input class="w-100" type="text" name="ano" value="{{ isset($registro->ano) ? $registro->ano :  '' }}" placeholder="ano"> 
</div> 

<div class="form-group"> 
<label for="placa">Placa</label> 
<input class="w-100" type="text" name="placa" value="{{ isset($registro->placa) ? $registro->placa : '' }}" placeholder="placa"> 
</div> 

<div class="form-group"> 
<label for="valor">Valor</label> 
<input class="w-100" type="number" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}" placeholder="valor"> 
</div> 

<div class="form-group"> 
<label>Imagem</label><br> 
@if(isset($registro->imagem)) 
<img height="90" src="{{asset($registro->imagem)}}"/> 
@endif 
<input class="w-100" type="file" name="imagem" class="form-control-file"> 
</div>