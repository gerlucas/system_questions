<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Elementos HTML</title>
</head>
<html>
<body>
    <h1>Gerador de Elementos HTML e respectivos codigos-fonte</h1>
    <form action="" method="get" id="formulario-questoes">
        <fieldset>
            <legend>Digite seu numero:</legend>
            <label for="totalElementos">Total de elementos:</label>
            <input type="number" name="totalElementos" id="totalElementos" min="1" max="15" value="1">
            <span> (1 a 15)</span><br><br>
            
            <label for="texto">Texto</label>
            <input type="radio" id="texto" name="elemento" value="texto" onclick="document.getElementById('formulario-questoes').submit()"><br>
            
            <label for="senha">Senha</label>
            <input type="radio" id="senha" name="elemento" value="senha" onclick="document.getElementById('formulario-questoes').submit()"><br>
            
            <label for="botao">Botão</label>
            <input type="radio" id="botao" name="elemento" value="botao" onclick="document.getElementById('formulario-questoes').submit()"><br>
            
            <label for="radio">Radio</label>
            <input type="radio" id="radio" name="elemento" value="radio" onclick="document.getElementById('formulario-questoes').submit()"><br>
            
            <label for="caixaselecao">Caixa de seleção</label>
            <input type="radio" id="caixaselecao" name="elemento" value="caixaselecao" onclick="document.getElementById('formulario-questoes').submit()"><br>
            
            <label for="faixa">Faixa</label>
            <input type="radio" id="faixa" name="elemento" value="faixa" onclick="document.getElementById('formulario-questoes').submit()"><br>
        </fieldset>
    
        <?php
        $totalElementos = $_GET['totalElementos'] ?? 1;
        $elementoSelecionado = $_GET['elemento'] ?? 'elemento';        
        
        if ($totalElementos >= 1 && $totalElementos <= 15) {
            if ($elementoSelecionado == "texto") {
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<br> <input type=\"text\" name=\"text$i\" id=\"text$i\"><br>";
                }
                echo "<br>";
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "&lt;input type=\"text\" name=\"text$i\" id=\"text$i\"&gt;&lt;br&gt;<br>";
                }
            }
        } else {
            echo "Quantidade invalida. O numero de elementos deve estar de 01 a 15.";
        }
        ?>
    </form>
</body>
</html>
