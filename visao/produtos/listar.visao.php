<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Produtos </h2>
        <hr align="center" width="100%" size="1" color="orange">
        <div class="corpinho">
            <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th>            </th>
                            <th>            </th>
                            <th>            </th>
                            <th>            </th>
                        </tr>
                    </thead>
                    <?php foreach ($produtos as $produto):?>
                    <tr>
                        <td><?= $produto["nome"]?></td>
                        <td><?= $produto["preco"]?></td>
                        <td><a href="./produto/ver/<?=$produto["id_produto"]?>">Ver detalhes</a></td>
                        <td><a href="./produto/deletar/<?=$produto["id_produto"]?>"> Deletar </a></td>
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </body>
</html>