<?php 

function adicionarClinte($nome, $cpf, $telefone,$sexo, $dataNc , $email,  $senha){
    $comando= "INSERT INTO cliente (nome, telefone, sexo, dataNc, email, senha)
    Values ('$nome', '$cpf', '$telefone','$sexo',' $dataNc', '$email',  '$senha')";

    $resultado= mysql_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar cliente'. mysql_error($cnx)); }
return 'Cliente cadastrado com sucesso!';

}


 ?>