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
        <h2>Q2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</h2>
        <p>A&#41;<a href="./questao03-3.php?resp1=<?= $_GET['resp1'] ?>&resp2=1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</a></p>
        <p>B&#41;<a href="./questao03-3.php?resp1=<?= $_GET['resp1'] ?>&resp2=2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</a></p>
        <p>C&#41;<a href="./questao03-3.php?resp1=<?= $_GET['resp1'] ?>&resp2=3" class="correta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</a></p>
        <p>D&#41;<a href="./questao03-3.php?resp1=<?= $_GET['resp1'] ?>&resp2=4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</a></p>
        <p>E&#41;<a href="./questao03-3.php?resp1=<?= $_GET['resp1'] ?>&resp2=5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</a></p>
    </main>


    <footer>
        <div class="center">
            <a href="./questao03-1.php">Cancelar</a>
            <a href="../index.php">Página Inicial</a>
        </div>
    </footer>
</body>

</html>