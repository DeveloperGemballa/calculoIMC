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
            <h1><mark>IMC: {{number_format($imcpessoa, 2)}}</mark></h1>
        </div>
        <br>
        <p class="imctexto" align="center">
                {{$_GET['nome']}}, sua idade é: {{$idade}} anos
                {{$msgIMC}} e {{$horassono}}
        </p>

       <a href="/" class="botao" style="position:absolute;top:500px;left:45%;">voltar</a>
    </div>
</body>
</html>