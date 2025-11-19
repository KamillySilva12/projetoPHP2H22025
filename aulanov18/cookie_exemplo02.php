<?php 
$value='aluno';
/*Expira no final da sessão (quando browser fechar)*/
setcookie("Ocupado", $value);

setcookie("Ocupado", $value,time()+60);
/*expira em 1 segundo*/

 ?>