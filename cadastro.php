<?php
    include('conexao.php');

    $nome_usuario = $_POST['nome'];
    $email_usuario = $_POST['email'];
    $senha_usuario = $_POST['senha'];

    $usuario = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, id_tipo_usuario) VALUES ('$nome_usuario', '$email_usuario', '$senha_usuario', 2)";
    
    if(mysqli_query($conn, $usuario)){
        echo "<h1>Novo cadastro realizado com sucesso</h1>";
    } else{
        echo "Erro: " . $usuario . "</br>" . mysqli_error($conn);
    }
    mysqli_close($conn)
?>