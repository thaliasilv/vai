<h3>Produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>  Nome     </th>
                    <th>  E-mail   </th>
                    <th>           </th>
                </tr>
            </thead>
            <?php foreach ($clientes as $cliente):?>
            <tr>
                <td><?= $cliente["nome"]?></td>
                <td><?= $cliente["email"]?></td>
                <td><a href="./cliente/ver/<?=$cliente["id_cliente"]?>">Ver detalhes</a></td>
            </tr>
         
            <?php endforeach;?>
        </table>

