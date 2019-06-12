<form action="" method="POST">
	nome: <input type="text" name="nome">
	senha: <input type="text" name="senha">
	email: <input type="text" name="email">
	senha novamente: <input type="text" name="senhanovamente">
	<button style="color: orange" type="submit">Entrar</button>
        
</form>
  <h2 style="font-style: italic">Não foi possível cadastrar</h2>
        <h4 style="font-style: italic">Informe os dados adequados</h4>
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>