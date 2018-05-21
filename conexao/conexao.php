<?php

//Passo 1
    $servidor = 'localhost'; //erro202-se não conseguir conectar
    $usuario = 'unixlira'; //erro1045-se não conseguir conectar
    $senha = '#Fibra13'; //erro1045-se não conseguir conectar
    $banco = 'bd_upstyle'; //erro1049-se não conseguir conectar

    $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);
//Passo 2 Testar conaxão
    if (mysqli_connect_errno()) {
        die('Conexão Falhou!'.mysqli_connect_errno());
    }

// //Consulta a tabela users
//     $consulta_usuario = 'SELECT * FROM users';
//     $usuarios = mysql_query($conecta, $consulta_usuario);

//     if (!$usuarios) {
//         die('<h1>Error: Fail connect in DATABASE</h1strong>');
//     }
