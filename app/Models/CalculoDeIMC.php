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
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
        // Convertendo string em número
            $altura =  floatval($altura);
            $peso = floatval($peso);

            $imcpessoa = ($peso / ($altura * $altura));
        
            return $imcpessoa;
        }
        public function mensagemIMC() {

            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
        // Convertendo string em número
            $altura =  floatval($altura);
            $peso = floatval($peso);

            $imcpessoa = ($peso / ($altura * $altura));
        
            if($imcpessoa < 18.5)
            {
                $msgIMC = "o seu peso está abaixo do ideal!";
            }
            else if($imcpessoa >= 18.5 && $imcpessoa < 24.9)
            {
                $msgIMC = "o seu peso está normal!";
            }
            else if($imcpessoa >= 25 && $imcpessoa < 29.9)
            {
                $msgIMC = "o seu peso está acima do normal!\n(recomendamos cuidar com suas refeições)";
            }
            else if($imcpessoa >= 30 && $imcpessoa < 34.9)
            {
                $msgIMC = "o seu peso está na faixa de obesidade I!\n(recomendamos uma consulta com um especialista)";
            }
            else if($imcpessoa >= 35 && $imcpessoa < 39.9)
            {
                $msgIMC = "o seu peso está na faixa de obesidade II!\n(recomendamos uma consulta com um especialista com urgência)";
            }
            else if($imcpessoa >= 40)
            {
                $msgIMC = "o seu peso está na faixa de obesidade III!\n(sugerimos procurar um especialista urgente)";
            }
        
            return $msgIMC;
        }
        public function calculandoidade()
        {
            $anonascimento = $_GET['dataN'];
            $anoatual = 2022;
        // Convertendo string em número
            $anonascimento =  intval($anonascimento);

            $idadepessoa = $anoatual - $anonascimento;
            
            return $idadepessoa;
        }
        public function calculandosono()
        {
            $horassono = $_GET['horassono'];
            $idade = $_GET['dataN'];
        // Convertendo string em número
            $horassono =  floatval($horassono);
            if($idade <= 2)
            {
                if($horassono >15)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <12)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            else if($idade <= 5)
            {
                if($horassono >13)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <10)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            else if($idade <= 13)
            {
                if($horassono >11)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <9)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            else if($idade <= 17)
            {
                if($horassono >10)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <8)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            else if($idade <= 25)
            {
                if($horassono >9)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <7)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            else if($idade <= 64)
            {
                if($horassono >9)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <7)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            else if($idade > 64)
            {
                if($horassono >8)
                {
                    $msgSONO = "Sono irregular, dormindo mais que o necessário para sua idade.";
                }
                else if($horassono <7)
                {
                    $msgSONO = "Sono irregular, dormindo menos que o necessário para sua idade.";
                }
                else
                {
                    $msgSONO = "Seu sono está dentro do necessário para sua idade! Parabéns.";
                }
            }
            return $msgSONO;
        }
    }