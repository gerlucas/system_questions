<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimentos financeiros</title>
    <link rel="stylesheet" href="./css/stylequest04.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<html>

<body>
    <header>
        <h1>Simulador de investimentos financeiros</h1>
    </header>
    <main>
        <form action="" method="get" id="formulario-questoes">
            <fieldset>
                <legend>Parâmetros</legend>
                <label for="aporteInicial">Aporte inicial (R$):</label>
                <input type="number" class="input-elementos" name="aporteInicial" id="aporteInicial" min="1" max="99999999.99" value="500">
                <span> [até R$999.999,99]</span><br>

                <label for="periodo">Período (meses):</label>
                <input type="number" class="input-elementos" name="periodo" id="periodo" min="1" max="480" value="12">
                <span> [de 1 a 480 meses]</span><br>

                <label for="rendimentoMensal">Rendimento mensal (%):</label>
                <input type="number" class="input-elementos" name="rendimentoMensal" id="rendimentoMensal" min="0,1" max="20" value="0.7">
                <span> [até 20%]</span><br>

                <label for="aporteMensal">Aporte mensal:</label>
                <input type="number" class="input-elementos" name="aporteMensal" id="aporteMensal" min="1" max="99999999.99" value="350">
                <span> [até R$999.999,99]</span><br>

                <input type="submit" value="Processar">
            </fieldset>

            <?php
            $aporteInicial = $_GET["aporteInicial"] ?? 500;
            $periodo = $_GET["periodo"] ?? 12;
            $rendimentoMensal = $_GET["rendimentoMensal"] ?? 0.7;
            $aporteMensal = $_GET["aporteMensal"] ?? 350;
            ?>
    </main>

    <footer>
        <div class="center">
            <a href="../index.php">Página Inicial</a>
        </div>
    </footer>
</body>

</html>