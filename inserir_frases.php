<?php

require_once ("conect.php");

$mensagem = isset($_POST["mensagem"]) ? $_POST["mensagem"] : "";

//inserindo dados na tabela "mensagens"

$inserir ="INSERT INTO mensagens (mensagem) VALUES ('$mensagem')";

$resul = mysqli_query($conexao,$inserir);

if($resul)
{
    header("location:frases.php?admin=0");
}else
{
    $error = mysqli_error();
    echo $error;

}
?>