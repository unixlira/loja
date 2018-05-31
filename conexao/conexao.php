<?php

mysqli_report(MYSQLI_REPORT_STRICT);
//Tratamento de erro- pegar na documentação as excessões
try {
    $conecta = new mysqli('127.0.0.1', 'admin', '1q2w3e', 'bd_upstyle');
    //echo 'connect success';
} catch (Exception $e) {
    echo 'ERROR:'.$e->getMessage();
}
