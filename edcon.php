<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $sql = "UPDATE contato SET nome=?,telefone=?,email=?,datanascimento=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização:".$conn->errno;
    }
    $stmt->bind_param('ssssi',$nome,$telefone,$email,$datanascimento,$id);
    $stmt->execute();
    $conn->close();
    header('Location:contato.php');
?>