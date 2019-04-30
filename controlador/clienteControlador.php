<?php

function cadastro(){
    if(ehPost()){
//Validações Obrigatórias      
if (strlen(trim($_POST['nome'])) == 0) {
echo "Você deve inserir o nome.";
 }
 
 $input['senha'] =
filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);
 if ($input['senha'] == FALSE) {
echo 'Informe uma senha valida.';
 }
 
 if (strlen(trim($_POST['email'])) == 0) {
echo "Você deve inserir o email.";
 }
 
  // html e javascript
        echo "<BR><BR>Validacao HTML<br>";
        echo strip_tags($_POST["nome"]);
        echo htmlentities($_POST["senha"]);


        $nome= $_POST["nome"];
        $senha= $_POST["senha"];
        $email= $_POST["email"];
        $senha_novamente= $_POST["senhanovamente"];
         print_r($_POST);
    }else{
        exibir ("cliente/cliente");
    }
}
?>