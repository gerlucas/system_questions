<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="circle"></div>
        <div class="content">
            <div class="text">
                <h2>Sistema de<br><span>Questões</span></h2>
                <p>O nosso sistema é um projeto educacional para estudo em PHP.</p>
                <?php
                $paginas = [
                    'questao01.php' => 'Acesse a questão 01',
                    'questao02.php' => 'Acesse a questão 02',
                    'questao03-1.php' => 'Acesse a questão 03',
                    'questao04.php' => 'Acesse a questão 04',
                ];

                $link = '<a href="%s">%s</a>';

                foreach ($paginas as $pagina => $titulo) {
                    printf($link, $pagina, $titulo);
                }
                ?>
            </div>
        </div>
    </section>
</body>
</html>