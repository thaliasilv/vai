<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2 style="color: orange; margin-top: 5%;"> Cupons cadastrados: </h2>
        <hr align="center" width="100%" size="1" color="orange">
        <div class="corpinho">
            <div class="caixinha">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Idcupom</th>
                            <th>Nome</th>
                            <th>Ver</th>
                            <th>Deletar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <?php foreach ($cupons as $cupom):?>
                    <tr>  
                        <td><?=$cupom['idcupom']?></td>
                        <td><?=$cupom['nomeCupom']?></td>
                        <td><a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a></td>
                        <td><a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a></td>
                         <td><a href="./cupom/editar/<?=$cupom['idcupom']?>">Editar</a></td>
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </body>
</html>