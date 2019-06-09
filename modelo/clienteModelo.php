<?php 

function adicionarClinte($nome, $cpf, $telefone,$sexo, $dataNc , $email,  $senha){
    $comando= "INSERT INTO cliente (nome, telefone, sexo, dataNc, email, senha)
    Values ('$nome', '$cpf', '$telefone','$sexo',' $dataNc', '$email',  '$senha')";

    $resultado= mysql_query($cnx=conn(), $comando);
    if (!$resultado){die ('Erro ao cadastrar cliente'. mysql_error($cnx)); }
return 'Cliente cadastrado com sucesso!';

}

function seleciona_todos_os_clientes(){
    $sql = "select * from cliente";
    $result = mysqli_query(conn(), $sql);
    $clientes = array();
    while($linha = mysqli_fetch_assoc($result)){
        $clientes[] = $linha;
    }
    return $clientes;
}

function MostrarClientePorCodigo($cod){
    $sql = "select * from cliente where id_cliente = $cod";
    $result = mysqli_query(conn(), $sql);
    $clientes = mysqli_fetch_assoc($result);
    
    return $clientes;
}

 ?>