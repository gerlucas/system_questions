<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
    <link rel="stylesheet" href="./css/stylequest03.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<html>

<body>
    <header>
        <h1>Questionário com resposta em formato de links</h1>
    </header>


    <main>
        <h2>Q4. Qual o melhor navegador?</h2>
        <div class="alternativas">
            <p><a href="./questao03-result.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=<?= $_GET['resp3'] ?>&resp4=1" class="alternativa alternativa-1 correta">A&#41; Pedro Álvares Cabral.</a></p>
            <p><a href="./questao03-result.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=<?= $_GET['resp3'] ?>&resp4=2" class="alternativa alternativa-2">B&#41; Google Chrome.</a></p>
            <p><a href="./questao03-result.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=<?= $_GET['resp3'] ?>&resp4=3" class="alternativa alternativa-3">C&#41; Internet Explorer.</a></p>
            <p><a href="./questao03-result.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=<?= $_GET['resp3'] ?>&resp4=4" class="alternativa alternativa-4">D&#41; Firefox.</a></p>
        </div>
        <p><a href="./questao03-result.php?resp1=<?= $_GET['resp1'] ?>&resp2=<?= $_GET['resp2'] ?>&resp3=<?= $_GET['resp3'] ?>&resp4=5" class="alternativa alternativa-5">E&#41; Opera GX.</a></p>
    </main>

    <footer>
        <div class="center">
            <a href="./questao03-1.php">Cancelar</a>
            <a href="./index.php">Página Inicial</a>
        </div>  
        <div class="footer">
            <p>&copy; 2023 - George Lucas & Gabriel Soares</p>
        </div>
    </footer>
</body>

</html>