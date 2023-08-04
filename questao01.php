<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Elementos HTML</title>
    <link rel="stylesheet" href="./css/stylequest01.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<html>
<body>
    <h1>Gerador de elementos HTML e respectivos códigos</h1>
    <form action="" method="get" id="formulario-questoes" >
        <fieldset>
            <legend>Geração de elementos</legend>
            <label for="totalElementos">Total de elementos:</label>
            <input type="number" class="input-elementos" name="totalElementos" id="totalElementos" min="1" max="15" value="1">
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
                    echo "<br><input type=\"text\" class=\"input-exemplo\" name=\"text$i\" id=\"text$i\">";
                }
                echo "<br>";
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<p>&lt;input type=\"text\" name=\"text$i\" id=\"text$i\"&gt;&lt;br&gt;</p>";
                }
            } else if ($elementoSelecionado == "senha") {
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo " <br><input type=\"password\" class=\"input-exemplo\" name=\"password$i\" id=\"password$i\">";
                }
                echo "<br>";
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<p>&lt;input type=\"password\" name=\"text$i\" id=\"text$i\"&gt;&lt;br&gt;</p>";
                }
            } else if ($elementoSelecionado == "botao") {
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<br><input type=\"button\" class=\"input-botao\" value=\"Botão $i\">";
                }
                echo "<br>";
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<p>&lt;input type=\"button\" value=\"Botão $i\"&gt;&lt;br&gt;</p>";
                }
            } else if ($elementoSelecionado == "radio") {
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<br><input type=\"radio\" name=\"radio\" id=\"radio$i\">";
                    echo "<label for=\"radio$i\">Radio $i</label>";
                }
                echo "<br>";
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<p>&lt;input type=\"radio\" name=\"radio\" id=\"radio$i\"&gt;</p>";
                    echo "<p>&lt;label for=\"radio$i\"&gt;Radio $i&lt;/label&gt;&lt;br&gt;</p>";
                }
            } else if ($elementoSelecionado == "caixaselecao") {
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<br><input type=\"checkbox\" name=\"checkbox$i\" id=\"checkbox$i\">";
                    echo "<label for=\"checkbox$i\">Caixa de Seleção $i</label>";
                }
                echo "<br>";
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<br><p>&lt;input type=\"checkbox\" name=\"checkbox$i\" id=\"checkbox$i\"&gt;";
                    echo "<p>&lt;label for=\"checkbox$i\"&gt;Caixa de Seleção $i&lt;/label&gt;&lt;br&gt;</p>";
                }
            } else if ($elementoSelecionado == "faixa") {
                $valuefaixa = 5;
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<br><input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max =\"100\" value=\"$valuefaixa\">";
                    echo "<label for=\"range$i\">Faixa $i</label>";
                    $valuefaixa = $valuefaixa + 5;
                }
                echo "<br>";
                $valuefaixa = 5;
                for ($i = 1; $i <= $totalElementos; $i++) {
                    echo "<p>&lt;input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max=\"100\" value=\"$valuefaixa\"&gt;</p>";
                    echo "<p>&lt;label for=\"range$i\"&gt;Faixa $i&lt;/label&gt;&lt;br&gt;</p>";
                    $valuefaixa = $valuefaixa + 5;
                }
            }
        } else {
            echo "<br>";
            echo "Quantidade inválida. O numero de elementos deve estar de 1 a 15.";
        }
        ?>
         <div class="center">
        <a href="../index.php">Página Inicial</a>
    </div>
    </form>
   
</body>
</html>
