<?php
require_once "servico/validacaoServico.php";
require_once "modelo/clienteModelo.php";


/*function cadastro2(){
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

function adicionar(){
	if ((ehPost())){
	$nome= $_POST["nome"];
	$email= $_POST["email"];
	$senha= $_POST["senha"];
        $senha_novamente= $_POST["senhanovamente"];
         echo nao_vazio_e_limite($nome);
    $msg=adicionarCliente($nome, $email, $senha);
    
   
    echo $msg;

}else{
    echo "Não é post";

}
exibir("cliente/formulario");
}*/


function cadastro (){
    if(ehPost()){
        $nome = $_POST['nomec'];
        $cpf = $_POST['cpfc'];
        $sexo = $_POST['sexc'];
        $aniversario = $_POST['dataNc'];
        $email = $_POST['emailc'];
        $senha = $_POST['senhac'];
        $tipo = $_POST['tipoc']; 
        
        //validações
        echo nao_vazio_e_limite($nome);
        echo nao_vazio_e_limite($cpf);
        echo nao_vazio_e_limite($sexo);
        echo nao_vazio_e_limite($senha);
        adicionarCliente($nome, $cpf, $sexo, $aniversario, $email,  $senha, $tipo);
        
     
    }else{
        exibir('cliente/cadastro');
    }
}

function listar(){
    $dados = array();
    $dados["clientes"] = seleciona_todos_os_clientes();
    exibir('cliente/listar', $dados);
}

function ver($cod){
    $dados["clientes"] = MostrarClientePorCodigo($cod);
    exibir('cliente/visualizar', $dados);
}

function deletar($idCliente) {
    deletarCliente($idCliente);
    redirecionar("cliente/listar");
}