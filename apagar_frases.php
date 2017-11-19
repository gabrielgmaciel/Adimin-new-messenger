<?php
require_once ("conect.php");

$id = isset($_POST["id"]) ? $_POST["id"] : "";

//função para deletar mensagens
function apagaMensagem($conexao,$id)
{
    global $id;
    $sql = "DELETE FROM mensagens WHERE id='{$id}'";
    $result = mysqli_query($conexao,$sql);
    return $result;
}
if (apagaMensagem($conexao,$id))
{
    header("location: frases.php?admin=1");
}else
{
    header("location: edita.php");
}

?>