<?php include("connect.php");

    try {
        // Execute SQL instructions
        $search = $conn->query("SELECT * FROM usuario");

        echo "<table><tr><td>ID</td><td>Nome</td><td>E-mail</td><td>Senha</td><td>Data de nascimento</td></tr>";

        while ($sql = $search->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>".$sql['id']."</td><td>".$sql['nome']."</td><td>".$sql['email']."</td><td>".$sql['senha']."</td><td>".$sql['nasc']."</td></tr>";
        }

        echo "</table>";

        echo "<br><br><br><a href='insert.php'>Cadastrar novo usuário</a>";

    } catch (PDOException $e) {
        //throw $th;
    }

?>