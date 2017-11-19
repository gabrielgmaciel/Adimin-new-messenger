<html>
<head>
    <meta charset="UTF-8">
    <?php
    include "header.php";
    require_once "conect.php";
    ?>
    <title>Users</title>
</head>
<body>
<?php
if(isset ($_GET["admin"]) && $_GET["admin"]==0)
{?>
    <p class="alert-success" style="width:100%">
        Nova mensagem cadastrada com sucesso ! !
    </p>
<?php } ?>
<?php
if(isset ($_GET["admin"]) && $_GET["admin"]==1)
{?>
    <p class="alert-success" style="width:100%">
        Mensagem apagada com sucesso ! !
    </p>
<?php } ?>
<form>
    <div class="container">
        <table class="table table-hover" width="80%">
            <thead class="thead-inverse">
                <tr>
                    <th><center>Frases de Envio</center></th>
                </tr>
            </thead>
                <?php
                function listarMensagens($conexao)
                {
                $sql = "SELECT * FROM mensagens";
                $result = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_assoc($result)){
                ?>
            <tr>
                <td align="left"><?php echo utf8_encode($array['mensagem']) ?></td>
                <td width="1"><label class="checkbox-inline"><center><input type="radio" name="id" id="id" value="<?php echo $array['id'] ?>"></center></label></td>
            </tr>
            <?php } ?>
            <?php }
            listarMensagens($conexao);?>
        </table>
    </div>
    <div class="container">
        <center>
            <input type="text" placeholder="Adicionar uma nova Frase" name="mensagem">
            <button class="btn btn-success" formaction="inserir_frases.php" formmethod="post">Adicionar</button>
            <button class="btn btn-danger" formaction="apagar_frases.php" formmethod="post">Excluir</button>
        </center>
    </div><br><br><br><br><br><br><br>
</form>
</body>
</html>