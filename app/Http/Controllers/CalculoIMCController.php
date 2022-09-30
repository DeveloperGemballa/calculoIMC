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
        $imcpessoa = $CalculoIMC->calculandoIMC();
        $msgIMC = $CalculoIMC->mensagemIMC();
        $idadepessoa = $idade->calculandoidade();
        $horassono = $horassono->calculandosono();
        return view('IMCinfo',['imcpessoa'=>$imcpessoa, 'idade'=>$idadepessoa,  'msgIMC'=> $msgIMC, 'horassono'=>$horassono]);
     }
}
