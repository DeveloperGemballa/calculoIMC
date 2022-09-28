<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CalculoDeIMC;

class CalculoIMCController extends Controller
{
    public function index(){
        return view('CalculoIMC');
    }

    public function IMC(){

        $CalculoIMC = new CalculoDeIMC();
        $idade = new CalculoDeIMC();
        $horassono = new CalculoDeIMC();
        $valor = $CalculoIMC->calculandoIMC();
        $idadepessoa = $idade->calculandoidade();
        return view('IMCinfo',['valor'=>$valor, 'idade'=>$idadepessoa, 'horassono'=>$horassono]);
     }
}
