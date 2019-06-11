<h2 style="color: orange; margin-top: 5%;"> Cadastre seu Produto</h2>
<hr align="center" width="100%" size="1" color="orange">
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">
            Nome: <br> <input type="text" name=" NomeProduto"><br><br>
            Categoria:<br> 
            <select name="CategoriaProduto">
                <option value="default">Selecione a categoria</option>
                <?php foreach ($categorias as $categoria):?>
                <option value="<?=$categoria["cod_categoria"]?>"><?=$categoria["Nome"]?></option>
                <?php endforeach;?>
            </select><br><br>
            Descrição:<br> <input type="text" name="DescriProduto"><br><br>
            Imagem: <br> <input type="text" name="ImagemProduto"><br><br>
            Preço: <br> <input type="text" name="PreProduto"><br><br>
            Estoque mínimo:<br> <input type="text" name="eMin"><br><br>
            Estoque máximo:<br> <input type="text" name="eMax"><br><br><br><br>
            <button type="submit">Enviar</button>

        </form>
    </div>
</div>