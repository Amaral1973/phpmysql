<html>
    <body>
        <h3>Teste de Banco - TDS08</h3>
        <hr/>
        <?php
            include 'conecta.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM usuario WHERE id=$id";
            $query = $conn->query($sql);
            while($dados = $query->fetch_assoc()){
                $id = $dados['id'];
                $nome = $dados['nome'];
                $idade = $dados['idade'];
            }
        ?>
        <form action="ed.php?id=<?php echo $id; ?>" method="POST">
            Nome<br/>
            <input type="text" name="nome" value="<?php echo $nome; ?>"/><br/>
            Idade<br/>
            <input type="number" name="idade" value="<?php echo $idade; ?>"/><br/><br/>
            <input type="submit" value="Atualizar"/>
        </form>
        <br/>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Idade</td>
                <td>Ações</td>
            </tr>
            <?php
                include 'conecta.php';
                $pesquisa = mysqli_query($conn,"SELECT * FROM usuario");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0){
                    while($usuario = $pesquisa->fetch_array()){
                        $id = $usuario['id'];
                        echo "<tr>";
                        echo "<td>".$usuario['id']."</td>";
                        echo "<td>".$usuario['nome']."</td>";
                        echo "<td>".$usuario['idade']."</td>";
                        echo "<td><a href='editar.php?id=$id'>Editar</a> | <a href='excluir.php?id=$id'>Excluir</a></td>";
                        echo "</tr>";
                    }
                    mysqli_close($conn);
                } else {
                    echo "Não a usuários para listar!";
                    mysqli_close($conn);
                }
            ?>
        </table>
    </body>
</html>