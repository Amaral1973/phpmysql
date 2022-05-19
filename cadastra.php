<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "INSERT INTO usuario(nome,idade) VALUES ('$nome','$idade')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location:index.php');
?>