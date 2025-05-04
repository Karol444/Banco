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
    
    $sql = "select * from eventos where eve_codigo = ?";
    $comando = $banco->prepare($sql);
    $comando->execute(array($codigo));
    if($comando->fetch()) {
        $mensagem = "existe";
        echo json_encode(array("mensagem" => $mensagem));
        exit();
    }

    $sql = "insert into eventos
        (eve_codigo, eve_titulo, eve_local, eve_data, eve_preco, eve_ingressos)
        values (?, ?, ?, ?, ?, ?)";
    
    try {
        $comando = $banco->prepare($sql);
        $comando->execute(array($codigo, $titulo, $local, $data, $preco, $ingressos));
        
        $mensagem = "Parabens miseravi!";
    } catch (PDOException $e) {
        $mensagem = "skksksks falhou !";
    }
    
} else {
    $mensagem = "Tuuuudo erradoo viu!";
}


echo json_encode(array("mensagem" => $mensagem));
?>
