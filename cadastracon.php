<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $sql = "INSERT INTO contato(nome,telefone,email,datanascimento) VALUES ('$nome','$telefone','$email','$datanascimento')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location:contato.php');
?>