
<?php

include "connect.php";

$codadm = $_POST['codadm'];
$senha = $_POST['senha'];

$testar = $sql -> query("SELECT codadm, senha FROM adm WHERE codadm = '$codadm' and senha = '$senha'");
$check = mysqli_num_rows($testar);

if ($check == 1){
 
    echo"Login efetuado com sucesso";

    header("refresh:1, url=../adm.html");
    
 } else {

echo"Email ou senha invalidos";

include  ("loginADM.html");

                  
                
}
?>


</body>
</html>