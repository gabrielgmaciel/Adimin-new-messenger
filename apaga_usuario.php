<?php
require_once ("conect.php");

$id = isset($_POST["id"]) ? $_POST["id"] : "";

//função para deletar mensagens
function apagaMensagem($conexao,$id)
{
    global $id;
    $sql = "DELETE FROM usuario WHERE cod_usuario='{$id}'";
    $result = mysqli_query($conexao,$sql);
    return $result;
}
if (apagaMensagem($conexao,$id))
{
    header("location: users.php?admin=0");
}else
{
    header("location: users.php?admin=1");
}

?>