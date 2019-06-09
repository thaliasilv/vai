<h3>Produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>  Nome     </th>
                    <th>  Código   </th>
                    <th>           </th>
                </tr>
            </thead>
            <?php foreach ($categorias as $categoria):?>
            <tr>
                <td><?= $categoria["Nome"]?></td>
                <td><?= $categoria["cod_categoria"]?></td>
                <td><a href="./categoria/ver/<?=$categoria["cod_categoria"]?>">Ver detalhes</a></td>
            </tr>
         
            <?php endforeach;?>
        </table>

