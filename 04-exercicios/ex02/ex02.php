<?php
include('acao.php');
?>
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
        .noticia3{
            
            text-align: left;
            border: 1px solid black;
            float: left;
            width: 23%;
            height: 350px;
            margin-left: 10px;
            margin-top: 20px;
            
            }
        input {
            padding: 3px;
            box-shadow: 3px 3px 5px grey;
            font-size: 14px;
            font-weight: 600;
                width: 250px;
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
            width: 200px;
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
    <title>Valor de venda</title>
</head>
<body>
    <div id="principal">

    <div id="titulo">
    Exercícios <span class="laranja">PHP</span>

    <br><br>

    <a href="../index.html">Página Inicial</a>

</div>
<br>
<br>
    <h2> Valor total de venda </h2>
    <form action="" method="post">
    <div class="noticia3">
    <label for="nome">Digite o nome do 1º produto</label>
    <input type="text" name="nome">
    <br>
    <label for="valor">Digite o valor do 1º produto</label>
    <input type="text" name="valor">
    <br>
    <label for="qtde">Digite a quantidade vendida desse produto</label>        
    <input type="text" name="qtde">
    <br>
    <h3>Nome do 1º produto:</h3>
    <h2>       
        <?= $nome; ?>    
    </h2>
    <h3>Preço do 1º produto::</h3>
    <h2>       
        <?= $soma; ?>    
    </h2>       
    </div class="noticia3">
    <div class="noticia3">
    <label for="nome">Digite o nome do 2º produto</label>
    <input type="text" name="nome2">
    <br>
    <label for="valor">Digite o valor do 2º produto</label>
    <input type="text" name="valor2">
    <br>
    <label for="qtde">Digite a quantidade vendida desse produto</label>        
    <input type="text" name="qtde2"><br>
    <h3>Nome do 2º produto:</h3>
    <h2>       
        <?= $nome2; ?>    
    </h2>
    <h3>Preço do 2º produto::</h3>
    <h2>       
        <?= $soma2; ?>    
    </h2>
    </div class="noticia3">
    <div class="noticia3">
    <label for="nome">Digite o nome do 3º produto</label>
    <input type="text" name="nome3">
    <br>
    <label for="valor">Digite o valor do 3º produto</label>
    <input type="text" name="valor3">
    <br>
    <label for="qtde">Digite a quantidade vendida desse produto</label>        
    <input type="text" name="qtde3"><br>
    <h3>Nome do 3º produto:</h3>
    <h2>       
        <?= $nome3; ?>    
    </h2>
    <h3>Preço do 3º produto:</h3>
    <h2>       
        <?= $soma3; ?>    
    </h2>
    </div class="noticia3">
    <div class="noticia3">
    <h3>Calcular tudo:</h3>
    <button type="submit" id="button">Calcular tudo</button>        
    </div class="noticia3">
    </form>    
    
</body>
</html>