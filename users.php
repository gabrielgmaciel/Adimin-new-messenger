<html>
    <head>
        <meta charset="UTF-8">
        <?php include "header.php" ?>
        <title>Users</title>
    </head>
    <body>
    <?php
    if(isset ($_GET["admin"]) && $_GET["admin"]==0)
    {?>
        <p class="alert-success" style="width:100%">
            Usuário deletado com sucesso!
        </p>
    <?php } ?>
    <?php
    if(isset ($_GET["admin"]) && $_GET["admin"]==1)
    {?>
        <p class="alert-success" style="width:100%">
            Erro ao deletar o usuário
        </p>
    <?php } ?>
    <form action="apaga_usuario.php" method="post">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <?php

                include "conect.php";

                function listaUsuarios($conexao)
                {

                    $sql="SELECT * FROM usuario ORDER BY cod_usuario";
                    $resultado= mysqli_query($conexao,$sql );


                    while($array=mysqli_fetch_assoc($resultado)) { global $id; $id = $array['cod_usuario']?>
                        <tr>

                            <td><center> <label class="checkbox-inline"> <input type="radio" name="id" id="id" value="<?php echo $id;?>"> </label> </center></td>
                            <td> <?php echo $array['nome'];?></td>
                            <td> <?php echo $array['email'];?></td>
                            <td> <?php echo $array['telefone'];?></td>
                        </tr>
                        <?php
                    }
                }

                listaUsuarios($conexao);

                ?>
            </table>
        </div>
        <div>
            <center>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </center>
        </div>
    </form>
    </body>
</html>