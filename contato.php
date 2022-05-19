<html>
    <body>
        <h3>Teste de Banco - TDS08</h3>
        <hr/>
        <a href="index.php">Usuário</a> | <a href="contato.php">Contato</a>
        <hr/>
        <form action="cadastracon.php" method="POST">
            Nome<br/>
            <input type="text" name="nome"/><br/>
            Telefone<br/>
            <input type="text" name="telefone"/><br/>
            E-mail<br/>
            <input type="email" name="email"/><br/>
            Data de Nascimento<br/>
            <input type="date" name="datanascimento"/><br/><br/>
            <input type="submit" value="Cadastrar"/>
        </form>
        <br/>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>E-mail</td>
                <td>Data de Nascimento</td>
                <td>Ações</td>
            </tr>
            <?php
                include 'conecta.php';
                $pesquisa = mysqli_query($conn,"SELECT * FROM contato");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0){
                    while($contato = $pesquisa->fetch_array()){
                        $id = $contato['id'];
                        echo "<tr>";
                        echo "<td>".$contato['id']."</td>";
                        echo "<td>".$contato['nome']."</td>";
                        echo "<td>".$contato['telefone']."</td>";
                        echo "<td>".$contato['email']."</td>";
                        echo "<td>".$contato['datanascimento']."</td>";
                        echo "<td><a href='editarcon.php?id=$id'>Editar</a> | <a href='excluircon.php?id=$id'>Excluir</a></td>";
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