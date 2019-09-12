
        <h2 style="color: orange; margin-top: 5%;"> Atualize seu endereço:</h2>
        <hr align="center" width="100%" size="1" color="orange">
        <div class="corpinho">
            <div class="caixinha">
                <form action="" method="POST">
                   <label style="color: orange" for="fname">Rua:</label><br>
                <input type="text"  name="rua" value="<?=@$enderecos['rua']?>"> <br><br>
             <label style="color: orange" for="fname">Número:</label><br>
                <input type="number"  name="numero" value="<?=@$enderecos['numero']?>"><br><br>
             <label style="color: orange" for="fname">Complemento:</label><br>
                <input type="text"  name="complemento" value=" <?=@$enderecos['complemento']?>"><br><br>
             <label style="color: orange" for="fname">Bairro:</label><br>
                <input type="text"  name="bairro" value=" <?=@$enderecos['bairro']?>"><br><br>
             <label style="color: orange" for="fname">Cidade:</label><br>
                <input type="text"  name="cidade" value="<?=@$enderecos['cidade']?>"> <br><br>
             <label style="color: orange" for="fname">Cep:</label><br>
                 <input type="text"  name="cep" value=" <?=@$enderecos['cep']?>"><br><br>
                    <button style="color: orange" type="submit">Atualizar</button>
                    <br><br><br><br><br><br><br><br>
                    
                </form>
                
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
            </div>
        </div>
    

      
