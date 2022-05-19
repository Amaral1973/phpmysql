<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM contato WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        header('Location:contato.php');
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>