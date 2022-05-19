<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        header('Location:index.php');
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>