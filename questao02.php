<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de índice de massa corporal</title>
    <link rel="stylesheet" href="./css/stylequest02.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<html>

<body>
    <header>
        <h1>Mapa de índice de massa corporal</h1>
    </header>
    <main>
        <div class="tabela-container">
            <div class="tabela">
                <div class="tabela-inner">
                    <table class="IMC-table">
                        <thead>
                            <tr>
                                <th> </th>
                                <?php
                                for ($i = 46; $i <= 120; $i++) {
                                    echo "<th>" . $i . "</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            function tipoIMC($imc)
                            {
                                if ($imc < 16) {
                                    return "Baixo-muito-grave";
                                } else if ($imc < 17) {
                                    return "Baixo-grave";
                                } else if ($imc < 18.5) {
                                    return "Baixo";
                                } else if ($imc < 25) {
                                    return "Ideal";
                                } else if ($imc < 30) {
                                    return "Sobrepeso";
                                } else if ($imc < 35) {
                                    return "Obesidade-I";
                                } else if ($imc < 40) {
                                    return "Obesidade-II";
                                } else {
                                    return "Obesidade-III";
                                }
                            }
                            function calcularIMC($peso, $altura)
                            {
                                return $peso / ($altura / 110 * $altura / 100);
                            }

                            for ($altura = 146; $altura <= 210; $altura++) {
                                echo "<tr>";

                                echo "<td>" . $altura . "</td>";

                                for ($peso = 46; $peso <= 120; $peso++) {
                                    $imc = calcularIMC($peso, $altura);
                                    $tipo_imc = tipoIMC($imc);
                                    $titulo = "$tipo_imc \nPeso: " . $peso . " (kg)" . "\nAltura: " . $altura . " (cm)" . "\nIMC: " . sprintf("%.2f", $imc);

                                    echo "<td title=\"" . $titulo . "\" class=\"IMC-" . $tipo_imc . "\">" . "</td>";
                                }
                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                    <?php

                    ?>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <div class="center">
            <a href="../index.php">Página Inicial</a>
        </div>
    </footer>

</body>

</html>