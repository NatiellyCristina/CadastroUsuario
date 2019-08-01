<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Cadastro de usuários!</title>
    </head>
    <body>
        <?php
                echo"<p><a href=\"index.php\"> Cadastros de Usuarios</a> | 
                        <a href=\"lista_exercicio1.php\"> Lista dos usuarios</a> |
                    <p> ";

    if(empty($_POST)){
    echo"<form action=\"cadastra_exercicio1.php\" method=\"POST\">
    <fieldset>
        <legend>Cadastro de usuario</legend>
        <p>
            <label>Nome:</label>
            <input type=\"text\" name=\"nome\" size=\"30\" />
        </p>
        <p>
            <label>Email</label>
            <input type=\"email\" step=\"0.01\" name=\"email\" />
        </p>
        <p>
            <label>Sexo:</label>
            <input type=\"radio\" name=\"sexo\"  value=\"Feminino\"  />Feminino 
            <input type=\"radio\" name=\"sexo\"  value=\"Masculino\"  />Masculino
        </p>
        <p>
            <label>Nivel Escolaridade:</label>
            <input type=\"radio\" name=\"ne\"  value=\"fundamental\"  />Fundamental
            <input type=\"radio\" name=\"ne\"  value=\"medio\"  />Médio
            <input type=\"radio\" name=\"ne\"  value=\"superior\" />Superior
        </p>
        <p>
            <label>Linguagem:</label>
            <input type=\"checkbox\" name=\"linguagem\"  value=\"php\"  />PHP
            <input type=\"checkbox\" name=\"linguagem\"  value=\"c\"  />C++
            <input type=\"checkbox\" name=\"linguagem\"  value=\"java\" />Java Script
            <input type=\"checkbox \" name=\"linguagem\"  value=\"python\" />python
            
                         <input type=\"submit\" value=\"Cadastrar\"/>
         </fieldst>
         </form>
";
    }
   
?>
