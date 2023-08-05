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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<html>

<body>
    <header>
        <h1>Questionário com resposta em formato de links</h1>
    </header>


    <main>
        <h2>Obrigado por concluir! Seu resultado:</h2>
        <ol>
            <li>
                <?php
                if (isset($_GET['resp1'])) {
                    $resp1 = $_GET['resp1'];
                }
                if ($resp1 == '1') {
                    echo '<p class="alternativa-r alternativa-1"><i class="uil uil-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                } else {
                    echo '<p class="alternativa-r-in alternativa-1"><i class="uil uil-times"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                }
                ?>
            <li>
                <?php
                if (isset($_GET['resp2'])) {
                    $resp2 = $_GET['resp2'];
                }
                if ($resp2 == '3') {
                    echo '<p class="alternativa-r alternativa-3"><i class="uil uil-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                } else {
                    echo '<p class="alternativa-r-in alternativa-3"><i class="uil uil-times"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                }
                ?>
            </li>
            <li>
                <?php
                if (isset($_GET['resp3'])) {
                    $resp3 = $_GET['resp3'];
                }
                if ($resp3 == '5') {
                    echo '<p class="alternativa-r alternativa-5-r"><i class="uil uil-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                } else {
                    echo '<p class="alternativa-r-in alternativa-5-r"><i class="uil uil-times"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                }
                ?>
            </li>
            <li>
                <?php
                if (isset($_GET['resp4'])) {
                    $resp4 = $_GET['resp4'];
                }
                if ($resp4 == '2') {
                    echo '<p class="alternativa-r alternativa-2"><i class="uil uil-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                } else {
                    echo '<p class="alternativa-r-in alternativa-2"><i class="uil uil-times"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ducimus ex rem reprehenderit!</p>';
                }
                ?>
            </li>
        </ol>
    </main>

    <footer>
        <div class="center">
            <a href="./index.php">Página Inicial</a>
        </div>
        <div class="footer">
            <p>&copy; 2023 - George Lucas & Gabriel Soares</p>
        </div>
    </footer>
</body>

</html>