<?php
include "connect.php";
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id_tipo = 2;


$testar = $sql->query ("SELECT * FROM cli WHERE email = '$email' ");
$check = mysqli_num_rows($testar);


    if($check ==1){
        echo"O email $email já está cadastrado";
    }
    
 else{
if($sql->query("INSERT INTO cli(nome,senha,email,id_tipo) 
VALUES('$nome','$senha','$email', NULL)"));

echo "CADASTRO REALIZADO ";
    }
    

?>



