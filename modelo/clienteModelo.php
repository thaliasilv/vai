<?php 

function adicionarClinte($nome, $email, $senha, $senhanovamnte){
    $comando= "INSERT INTO cliente (nome, email, senha, senhanovamente)
    Values ('$nome', '$email', '$senha', '$senhanovamnte')";

    $resultado= mysql_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar cliente'. mysql_error($cnx)); }
return 'Cliente cadastrado com sucesso!';

}




 ?>