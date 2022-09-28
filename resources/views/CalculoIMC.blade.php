<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <title>Calculando seu IMC com Laravel!</title>
</head>
<body>
    <div class="painel">
        <header class="header"><h1 class="texto">Bem-vindo(a) ao cálculo de IMC!</h1></header>
            <form action="{{url('/IMCinfo')}}">
            <header class="headermenor"><h3 class="texto"><hr> Complete o formulário para requisitar o cálculo: <hr></h3></header>
                <hr>
                <input type="text" name="nome" id="nome" class="input" placeholder="Informe seu nome" required> &nbsp;&nbsp;
                <input type="date" name="dataN" id="dataN" class="input" placeholder="Informe seu ano de nasc" required>
                <br>
                <br>
                <input type="text" name="peso" id="peso" class="input" placeholder="Informe seu peso" required> &nbsp;&nbsp;
                <input type="text" name="altura" id="altura" class="input" placeholder="Informe sua altura" required>
                <br>
                <br>
                <input type="text" name="horassono" id="horassono" class="input" placeholder="Informe seu sono médio (horas)" required>
                <-- horas de sono em média
                <hr>
                <input type="submit" value="Enviar" class="botao">
            </form>
    </div>
</body>
</html>