
        <h2 style="color: orange; margin-top: 5%;"> <?= $clientes["nome"]?> </h2>
        <hr align="center" width="100%" size="1" color="orange">
        <div class="corpinho">
            <div class="caixinha">
                
                <h4> Cod.Cliente: <?= $clientes["id_cliente"] ?></h4>
                <h4>E-mail: <?= $clientes["email"]?></h4>
                <h4>CPF: <?= $clientes["cpf"]?></h4>
                <h4>Sexo: <?= $clientes["sexo"]?></h4>
                <h4>Tipo: <?= $clientes["tipo"]?></h4>
              
   
                
              
                <br><br><br><br><br> <a style="color: orange" href="./endereco/adicionar/<?= $clientes["id_cliente"] ?>"><button style="color: orange">Cadastrar endereço(s)</button></a>
                <br><br><br><br><br> <a style="color: orange" href="./endereco/listar/<?= $clientes["id_cliente"] ?>">Ver endereços cadastrados</a>
            </div>
        </div>
        
  <?php
  require_once 'visao/endereco/listar.visao.php';
  ?>
                
               
