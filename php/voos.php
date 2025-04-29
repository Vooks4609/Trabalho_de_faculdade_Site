<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
    
    <!-- Utilizar link CSS do Bootstrap -->
</head>
<center>
        <div class="cabeca">
            <ul><h1>Fundadores</h1>
                <ol>Brenno Rosolem dos Santos Vieira - 1250114647</ol>
                <ol>Thays Ramos Amaral Arry - 1250116126</ol>
                <ol>Gabriel Ribeiro Rodrigues - 1250117290</ol>
                <ol>Gabriel Gallart Almeida - 1250116525</ol>
            </ul>
        </div>
    </center>
<header class="titulo">
        <nav class="menu">
        <a onclick="clicou()" class="Nos" href="../html/sobre.html">Sobre Nós</a> <a href="../html/novidades.html">Novidades</a> <a href="../html/index.html">AeroPorto</a> <a href="../html/contatos.html">Contatos</a> <a href="voos.php">Voos</a>
        </nav>
    </header>

<body class="container">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Empresa</td>
                <td>Jornada</td>
                <td>Horario</td>
            </tr>
        </thead>
        <style>

tbody {
           background-color:rgb(101, 101, 119);
           margin-left: 0px;
           margin-right: 0px;
       }
       
       body{
           margin: 0%;
           background: url(..//img/airport-airplane-on-runway-vector-600nw-2521665201.webp) no-repeat;
           background-size: cover;
           justify-content: center ;
           align-items: center;
           height: 100%;
           box-sizing: border-box;
           bottom: 8vh;
       }
       .titulo{
           display: flex;
           background-color: rgb(54, 199, 243);    
           height: 8vh;
           justify-content: space-around;
           align-items: center;
       }
       .menu{
           display: flex;
           justify-content: space-around;
           align-items: center;
           width: 100%;
           font-size: 24px;
           letter-spacing: 4px;
           text-transform: uppercase;
       }
       a{
           text-decoration: none;
           color: rgb(0, 24, 88);
           transition: 300ms;
           font-family: monospace;
           font-weight: bold;
       }
       .Nos{
           word-spacing: normal;
       }
       a:hover{
           opacity: 0.7;
           color: rgb(196, 248, 255);
       }

       .footer {
           text-transform: uppercase;
           color: rgb(255, 255, 255);
           font-family: 'Times New Roman', Times, serif;
           position: relative;
           background-color: rgb(19, 18, 75);
           padding-top: 0.6%;
           padding-bottom: 0.6%;
           
       }

       

       .cabeca {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto; /* Centraliza horizontalmente */
    max-width: 400px; /* Largura máxima do bloco */
    text-align: center;
}

.cabeca ul {
    list-style: none;
    padding: 0;
    margin: 0;
    
}

h1 {
    text-align: center;
    background-color: aliceblue;
    margin-top: 0;
    box-shadow: 0 4px 8px rgb(19, 18, 75)
}

        </style>
        <tbody>
        <?php
            $total = 0;
            $conexao = new mysqli("localhost", "root", "", "azul"); /* conexão */
            $consulta = $conexao->query("select * from viagem where id > " .$total);
            //$consulta = $conexao->query("select * from frutas");
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado as $linha)
                echo ("<tr><td>" . $linha['id'] . "</td><td>" . $linha['empresa']
                    . "</td><td>" . $linha['jornada'] . "</td><td>" . $linha['horario'] ."</td></tr>");
            $conexao->close();
            ?>

<?php
            $total = 0;
            $conexao = new mysqli("localhost", "root", "", "gol"); /* conexão */
            $consulta = $conexao->query("select * from viagem where id > " .$total);
            //$consulta = $conexao->query("select * from frutas");
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado as $linha)
                echo ("<tr><td>" . $linha['id'] . "</td><td>" . $linha['empresa']
                    . "</td><td>" . $linha['jornada'] . "</td><td>" . $linha['horario'] ."</td></tr>");
            $conexao->close();
            ?>

<?php
            $total = 0;
            $conexao = new mysqli("localhost", "root", "", "latam"); /* conexão */
            $consulta = $conexao->query("select * from viagem where id > " .$total);
            //$consulta = $conexao->query("select * from frutas");
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado as $linha)
                echo ("<tr><td>" . $linha['id'] . "</td><td>" . $linha['empresa']
                    . "</td><td>" . $linha['jornada'] . "</td><td>" . $linha['horario'] ."</td></tr>");
            $conexao->close();
            ?>
        </tbody>
    </table>
    
</body>

</html>
