<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado!</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <div class="painel">
        <header class="header"><h1 class="texto">Resultado:</h1></header>
        <div class="imcpainel">
            <h1><mark>IMC: {{number_format($valor, 2)}}</mark></h1>
        </div>
        <br>
        <strong class="imctexto" align="center">
                {{$_GET['nome']}}, sua idade é: {{$idade}} anos
            <?php 
                if($valor < 18.5)
                {
                    echo "o seu peso está <mark>abaixo do ideal</mark>!";
                }
                else if($valor >= 18.5 && $valor < 24.9)
                {
                    echo "o seu peso está <mark>normal</mark>!";
                }
                else if($valor >= 25 && $valor < 29.9)
                {
                    echo "o seu peso está <mark>acima do normal</mark>!<br>(recomendamos cuidar com suas refeições)";
                }
                else if($valor >= 30 && $valor < 34.9)
                {
                    echo "o seu peso está na faixa de <mark>obesidade I</mark>!<br>(recomendamos uma consulta com um especialista)";
                }
                else if($valor >= 35 && $valor < 39.9)
                {
                    echo "o seu peso está na faixa de <mark>obesidade II</mark>!<br>(recomendamos uma consulta com um especialista com urgência)";
                }
                else if($valor >= 40)
                {
                    echo "o seu peso está na faixa de <mark>obesidade III</mark>! (sugerimos procurar um especialista urgente)";
                }
                
            ?>
        </strong>

       <a href="/" class="botao" style="position:absolute;top:500px;left:45%;">voltar</a>
    </div>
</body>
</html>