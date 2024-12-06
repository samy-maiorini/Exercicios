<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background: #e6e6e6;
        }
        .laranja{
            font-family: 'Trebuchet MS', 'Helvetica', sans-serif;
            color: #DAA520;
        }
        #titulo{
            font-family: 'Trebuchet MS', 'Helvetica', sans-serif;
            width: 100%;
            height: 120px;
            padding-top: 5px;
            background-color: black;
            color: white;
            text-align: center;
            font-size: xx-large;
            font-family: Arial, Helvetica, sans-serif;
        }
        a:link{
            color: white;
            text-decoration: none;
        }
        a:visited{
            color: white;
            text-decoration: none;
        }
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        #register {
            width: 400px;
        }

        input {
            padding: 3px;
            box-shadow: 3px 3px 5px grey;
            font-size: 14px;
            font-weight: 600;
                width: 300px;
        }
        label {
            color: #DAA520;
            font-weight: bold;
            display: block;
        }
        h3{
            color: #DAA520;
            font-weight: bold;
            display: block;
        }
        label:after { content: ": " }
        #button {
            padding: 10px;
            border: 1px solid gray;
            background-color:#DAA520;
            border-radius: 5px;
            font: inherit;
        }
        #button:focus {
            outline: 2px solid gray;
            font-weight: bold;
            color: white;
        }
        #button:hover {
            background-color: #de4e00;
            box-shadow: 3px 3px 5px grey;
        }
    </style>
    <title>Tabuada</title>
</head>
<body>
    <div id="principal">

    <div id="titulo">
    Exercícios <span class="laranja">PHP</span>

    <br><br>

    <a href="../index.html">Página Inicial</a>

</div>
<br>
</body>
</html>
<?php
// Inicialize o número de contagem
$contador = 233;

// Laço do-while para contar de 
do {
    echo "A contagem com do while é: " . $contador . "<br>"; // Mostra o número na tela

    // Verifica se o contador está entre 300 e 400
    if ($contador >= 300 && $contador <= 400) {
        $contador += 3; // Incrementa o contador de 3 em 3
    } else {
        $contador += 5; // Incrementa o contador de 5 em 5
    }

} while ($contador <= 456);

?>
