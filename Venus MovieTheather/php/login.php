
<?php

include "connect.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$testar = $sql -> query("SELECT email, senha FROM cli WHERE email = '$email' and senha = '$senha'");
$check = mysqli_num_rows($testar);

if ($check == 1){
 
    echo"Login efetuado com sucesso";

    header("refresh:1, url=../index.html");
    
 } else {

echo"Email ou senha invalidos";

include  ("cadastro.html");

                  
                
}
?>


</body>
</html>