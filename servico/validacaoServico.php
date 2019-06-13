 <?php
     function nao_vazio ($valor,$tipo){
        if (strlen(trim($valor)) == 0) {
            return "Você deve inserir um valor para $tipo.<br>";
        }else{
            return NULL;
     }
     }
    function tipo_Especifico($valor){
        $input['valor'] = filter_var($valor, FILTER_VALIDATE_INT);
        If($input['valor'] ==FALSE){
            return 'Informe um valor válido';
        }else{
            return Null;
        }
    }    
         
    function  validando_email ($email){
    $imput ['email']= filter_var($email, FILTER_VALIDATE_EMAIL); 
    if ($imput ['email']== FALSE){
        return 'Informe um e-mail válido.<br>';
    } else {
        return NULL;
    }
}
 


?>