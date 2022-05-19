<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "UPDATE usuario SET nome=?,idade=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização:".$conn->errno;
    }
    $stmt->bind_param('ssi',$nome,$idade,$id);
    $stmt->execute();
    $conn->close();
    header('Location:index.php');
?>