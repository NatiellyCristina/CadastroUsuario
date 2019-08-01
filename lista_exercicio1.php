<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Listagem de corridas !</title>
    </head>
    <body>
        <?php
            $cont = 0;
            echo"
                 <p><a href=\"index.php\"> Cadastros de Usuarios</a> | 
                        <a href=\"lista_exercicio1.php\"> Lista dos usuarios</a> | 
                     <p> ";  

                 echo "<div classi=\"center\">
                             <table class=\"tabela1\" width=\"40%\" border=\"2\".
                             <thead>
                                 <tr>
                                     <th>Nome</th>
                                     <th>email</th>
                                     <th>sexo </th>
                                     <th>Nível Escolariade</th>
                                 </tr>
                             </thead>
                             <tbody>";
                     for($i = 0; $i < sizeof($_SESSION["nome"]); $i++)
                     {
                        $nome =   $_SESSION['nome'][$i];
                        $email =  $_SESSION['email'][$i]; 
                        $sexo = $_SESSION['sexo'][$i];
                        $nivel = $_SESSION['ne'][$i];
                        $linguagem =  $_SESSION['linguagem'][$i];
                     
                      
                             echo "<tr>
                                         <td>".$nome."</td>
                                         <td>".$email."</td>
                                         <td>".$sexo."</td>
                                         <td>".$nivel."</td>
                                         <td>".$linguagem."</td>
                                     </tr>";
                    
                         
                     }
                     echo " </tbody>
                             <table>
                         </div>";
 
                 echo" <a href=\"index.php\"> Voltar</a></p>";
             