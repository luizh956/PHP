<?php
// Pegar os dados da tela //

$email = $_POST["email"];
$senha = $_POST["senha"];

/*
echo"E-mail :".$email;
echo"<br>Senha :".$senha;
?>
*/

//Abrir a conexão com o banco de dados//
    //mysql_connect(SERVIDOR,USUARIO,SENHA<BANCO)//
$con = mysqli_connect("localhost","root","","aulaprojeto");

//Montar a instrução de seleção para ir ao banco//
$sql = "select * from usuario where email = '".$email."'and senha = '".$senha."'";

//Executar a instrução//
if(mysqli_query($con,$sql)){
    //echo "Encontrei";//
    //Redirecioner para a página painel, que está dentro da pasta ADM//
    echo "<script>";
    echo "location.href='ADM/painel.php'";
    echo "</script>";
}else{
    //echo "Não encontrei";//
    echo "<script>";
    echo "location.href='logar.php'";
    echo "</script>";
}

?>


