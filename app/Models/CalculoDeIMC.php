<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Node\Block\Document;

    class CalculoDeIMC extends Model
    {
        use HasFactory;
        public function calculandoIMC()
        {
            $nome = $_GET['nome'];
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
        // Convertendo string em número
            $altura =  floatval($altura);
            $peso = floatval($peso);

            $imcpessoa = ($peso / ($altura * $altura));
            
            return $imcpessoa;
        }
        public function calculandoidade()
        {
            $anonascimento = $_GET['dataN'];
            $anoatual = 2022;
        // Convertendo string em número
            $anonascimento =  floatval($anonascimento);

            $idadepessoa = $anoatual - $anonascimento;
            
            return $idadepessoa;
        }
        public function calculandosono()
        {
            $horassono = $_GET['horassono'];
        // Convertendo string em número
            $horassono =  floatval($horassono);
            return $horassono;
        }
        public function qualidadesono()
        {
            $msg = "";
            if($horassono>8)
            {

            }
            else if()
            {

            }
        }
    }