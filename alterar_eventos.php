<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if(isset($_REQUEST["codigo"])) {

    $codigo = $_REQUEST["codigo"];
    $titulo = $_REQUEST["titulo"];
    $local = $_REQUEST["local"];
    $data = $_REQUEST["data"];
    $preco = $_REQUEST["preco"];
    $ingressos = $_REQUEST["ingressos"];

    $sql = "update eventos set
        eve_titulo = ?
        where eve_codigo = ?";
    
    try {
        $comando = $banco->prepare($sql);
        $comando->execute(array($codigo, $titulo, $local, $data, $preco, $ingressos));
        
        $mensagem = "parabens miseravi!";
    } catch (PDOException $e) {
        $mensagem = "Erro ";
    }
    
} else {
    $mensagem = "nao foi!";
}


echo json_encode(array("mensagem" => $mensagem));
?>
