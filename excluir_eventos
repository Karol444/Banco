<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if(isset($_REQUEST["codigo"])) {

    $codigo = $_REQUEST["codigo"];

    $sql = "delete from eventos
        where eve_codigo = ?";
    
    try {
        $comando = $banco->prepare($sql);
        $comando->execute(array($codigo));
        
        $mensagem = "parabens miseravi";
    } catch (PDOException $e) {
        $mensagem = "erro!";
    }
    
} else {
    $mensagem = " nao foi !";
}


echo json_encode(array("mensagem" => $mensagem));
?>
