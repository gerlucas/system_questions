<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<body>
    <?php 
    $paginas = [
    'questao01.php' =>  'Questão 01',
    'questao02.php' =>  'Questão 02',
    'questao03-1.php' =>  'Questão 03',
    'questao04.php' =>  'Questão 04',
    ];

    $link = '<li><a href="%s">%s</a></li>';

    foreach ($paginas as $pagina => $titulo){
        printf($link, $pagina, $titulo);

    }
    ?>
</body>
</html>