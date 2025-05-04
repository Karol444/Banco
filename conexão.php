<?php

try {
    $banco = new PDO(
        'mysql:host=exemple1;dbname=eventos',
        'karol',
        'aluno@177',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));    
} catch(PDOException $e) {
    echo "banco de dados não disponível";
}
