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

    </form>
</body>
</html>
