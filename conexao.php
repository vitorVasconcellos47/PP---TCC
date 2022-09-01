<?php  

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "iLume";

    //String de conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conn){
        die("Conexão falhou: " . mysqli_connect_error());
    } else{
        echo "<h1> Conexão bem sucedida </h1>";
    }

?>