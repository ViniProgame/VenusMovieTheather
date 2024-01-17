<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>GS Arquiteturas</title>

</head>

<body>


    <?php
$cn = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($cn, "cliente");

$sqli = mysqli_query($cn, "SELECT * FROM clientes") or die( 
    mysqli_error($cn) //caso haja um erro na consulta 
  );

echo"</BR> </BR> <h1>DADOS CLIENTES</h1>";

while($aux = mysqli_fetch_assoc($sqli)) { 
    echo "-----------------------------------------<br />"; 

    echo "ID cliente:".$aux["id_cliente"]."<br />"; 
    echo "Nome:".$aux["nome"]."<br />"; 
     
  }

  $cn = mysqli_connect("localhost", "root","");
  $db = mysqli_select_db($cn, "projeto"); or die(mysqli_error($cn));

  while($aux) = mysqli_fetch_assoc($sqli)) {
    echo "Nomeado:" $aux["empreendimento"]."<br/>";
    echo "Previsão:" $aux["previsao_entrega"]. "<br/>";

    if{$db =/+ $aux["previsao_entrega"]
      
    }
  
   
  
?>


</body>
</html>
