<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carro;
use DB;

class CarroController extends Controller
{
    public function index()
    {
      $registros = Carro::all();
      return view('admin.carros.index',compact('registros'));   
    }

    public function adicionar() 
    { 
      return view('admin.carros.adicionar'); 
    }

    public function salvar(Request $req) 
    { 
      
      $dados = $req->all(); 
      $dir= "img/carros";

      if($req->hasFile('imagem')) 
      { 
          $imagem = $req->file('imagem');
          $car= DB::table('carros') 
          ->select('id') 
          ->orderBy('id', 'desc') 
          ->first();
           
        if(empty($car)) 
         $id = 1; 
        else
         $id = $car->id + 1;

         $ex= $imagem->guessClientExtension(); 
         $nomeImagem= $id.".".$ex;

         $imagem->move($dir, $nomeImagem);

         $dados['imagem'] = $dir."/".$nomeImagem; 
      }
      else
      { 
         $dados['imagem'] = $dir."/semImagem.jpg"; 
      }
         $dados['placa'] = strtoupper($dados['placa']);
         
         Carro::create($dados);

         return redirect()->route('admin.carros'); 
    }
}