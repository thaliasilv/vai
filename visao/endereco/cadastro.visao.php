        <h2 style="color: orange; margin-top: 5%;"> Cadastre-seu endereço: </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">          
                           
             <label style="color: orange" for="fname">Rua:</label><br>
                <input type="text"  name="rua"<?=@$endereco['rua']?> placeholder="João Nunes" ><br><br>
             <label style="color: orange" for="fname">Número:</label><br>
                <input type="number"  name="numero"<?=@$endereco['numero']?> placeholder="152"><br><br>
             <label style="color: orange" for="fname">Complemento:</label><br>
                <input type="text"  name="complemento" <?=@$endereco['complemento']?> placeholder="casa/apartamento" ><br><br>
             <label style="color: orange" for="fname">Bairro:</label><br>
                <input type="text"  name="bairro" <?=@$endereco['bairro']?> placeholder="Bela vista" ><br><br>
             <label style="color: orange" for="fname">Cidade:</label><br>
                <input type="text"  name="cidade" <?=@$endereco['cidade']?> placeholder="Itapetininga" ><br><br>
             <label style="color: orange" for="fname">Cep:</label><br>
                 <input type="text"  name="cep" <?=@$endereco['cep']?> placeholder="852147963" ><br><br>

                   
                        <button type="submit" class="signupbtn">Confirmar</button>
                           
               <br><br><br><br>
                <br><br><br><br>
                <a style="color: orange" href="./endereco/listar/">Ver endereços cadastrados</a>
                

        </form>
        
        
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>
        
      
        
             