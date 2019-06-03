<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($produtos as $produto):?>
        <h2>Nome: <?= $produto["nome"]?></h2>
        <h4>Descrição: <?= $produto["descr"]?></h4>
        <?php endforeach;?>
    </body>
</html>