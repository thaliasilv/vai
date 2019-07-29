        <h2 style="color: orange; margin-top: 5%;"> Cadastre-se aqui: </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">
                Nome:<br> <input type="text" name="nomec" value="<?= $clientes["nome"] ?>"><br>
                CPF:<br> <input type="text" name="cpf" value="<?= $clientes["cpf"] ?>"><br>
                <br> <br>
                
                
                Sexo: <label> Feminino </label>
              <input type="radio" name="sexc" value="F">
              <label> Masculino </label>
               <input type="radio" name="sexc" value="M">
              <br><br>
                
                Data de Nascimento:<br> <input type="text" name="dataNc" value="<?= $clientes["aniversario"] ?>"><br>
                E-mail:<br> <input type="text" name="emailc" value="<?= $clientes["email"] ?>"><br>
                Senha:<br> <input type="text" name="senhac" value="<?= $clientes["senha"] ?>"><br>
                Tipo de cliente:<br> <input type="text" name="tipoc" value="<?= $clientes["tipo"] ?>"><br><br><br><br>

                <button type="submit">Atualizar</button>
                <br><br><br><br>
                <a style="color: orange" href="./cliente/listar/">Ver clientes cadastrados</a>
                

        </form>
        
        
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>