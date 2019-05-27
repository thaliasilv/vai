<?php
function nao_vazio($a){
   if (strlen(trim($a)) == 0) {
   return "Você deve inserir um valor.";
}
}
function nao_vazio_e_inteiro($a){
    $input['campo'] =
filter_var($a, FILTER_VALIDATE_INT);
 if ($input['campo'] == FALSE) {
 return 'Informe um valor numérico.';
}
}


function nao_vazio_e_limite($a){
   if (strlen(trim($a)) == 0 && (strlen(trim($a)) <=10 )){
   return "Você deve inserir um valor com limite.";
}
}



function nao_string ($a){
    
    $input ['campo']= strip_tags($_POST["$a"]) &&  htmlentities($_POST["$a"]);
    $input= $_POST["$a"];
}

?>