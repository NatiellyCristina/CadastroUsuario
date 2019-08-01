<?php
session_start();



            $_SESSION['nome'][] = $_POST["nome"];
            $_SESSION['email'][] = $_POST["email"];
             $_SESSION['sexo'][]= $_POST['sexo'];
             $_SESSION['ne'][]= $_POST['ne'];
             $_SESSION['linguagem'][]= $_POST['linguagem'];
             echo "<h2>Usuario Cadastrado com sucesso</h2>";

             echo "<p>
                     <a href=\"index.php\">Voltar</a>
                 </p>";

?>