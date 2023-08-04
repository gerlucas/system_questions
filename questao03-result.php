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
        <h2>Parabéns! Seu resultado:</h2>
        <ol>
            <li>
            <?php
             if (isset($_GET['resp1'])) {
                $resp1 = $_GET['resp1'];
            }
            if($resp1 == '1'){
                echo '<i class="uil uil-check"></i>';
            }
            else{
                echo '<i class="uil uil-times"></i>';
            }
            ?>  
            <li>
            <?php
             if (isset($_GET['resp2'])) {
                $resp2 = $_GET['resp2'];
            }
            if($resp2 == '3'){
                echo '<i class="uil uil-check"></i>';
            }
            else{
                echo '<i class="uil uil-times"></i>';
            }
            ?>  
            </li>
            <li>
            <?php
             if (isset($_GET['resp3'])) {
                $resp3 = $_GET['resp3'];
            }
            if($resp3 == '5'){
                echo '<i class="uil uil-check"></i>';
            }
            else{
                echo '<i class="uil uil-times"></i>';
            }
            ?>  
            </li>
            <li>
            <?php
             if (isset($_GET['resp4'])) {
                $resp4 = $_GET['resp4'];
            }
            if($resp4 == '2'){
                echo '<i class="uil uil-check"></i>';
            }
            else{
                echo '<i class="uil uil-times"></i>';
            }
            ?>  
            </li>
        </ol>
    </main>

    <footer>
        <div class="center">
            <a href="../index.php">Página Inicial</a>
        </div>
    </footer>
</body>

</html>