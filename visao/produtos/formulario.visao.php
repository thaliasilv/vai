<h2 style="color: orange; margin-top: 5%;"> Cadastre seu Produto</h2>
<hr align="center" width="100%" size="1" color="orange">
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">
            <label  style="color: orange"for="fname">Nome do produto:</label> <br>
            <input type="text"  name="NomeProduto" placeholder="blusa..."><br><br>
            Categoria :<br> 
            <select name="CategoriaProduto">
                <option value="default">Selecione a categoria</option>
                <?php foreach ($categorias as $categoria):?>
                <option value="<?=$categoria["cod_categoria"]?>"><?=$categoria["Nome"]?></option>
                <?php endforeach;?>
            </select><br><br>
            <label style="color: orange" for="fname">Descrição:</label><br>
                <input type="text"  name="DescriProduto" placeholder="É um produto..."><br><br>
            <label style="color: orange" for="fname">Preço:</label><br>
                <input type="text"  name="PreProduto" placeholder="R$00.00"><br><br>
            <label style="color: orange" for="fname">Imagem:</label><br>
                <input type="text"  name="imagem" placeholder="adicione uma imagem "><br><br>
            <label style="color: orange" for="fname">Estoque mínimo:</label><br>
                <input type="number"  name="eMin" placeholder="01"><br><br>
            <label style="color: orange" for="fname">Estoque máximo:</label><br>
                <input type="number"  name="eMax" placeholder="10.000"><br><br><br><br>
            <button style="color: orange" type="submit">Enviar</button>
            <br> <br>
            
            <a style="color: orange" href="./produto/listar/">Ver produtos cadastrados</a>

        </form>
      
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>

    
    
     
    
     
    
     
    
     
    
     