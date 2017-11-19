<html>
    <head>
        <meta charset="UTF-8">
        <?php include "header.php" ?>
        <title>Users</title>
    </head>
    <body>
    <form>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <?php

                include "conect.php";

                function listaProdutos($conexao)
                {

                    $sql="select * from usuario, dados_veiculo ORDER by usuario.cod_usuario";
                    $resultado= mysqli_query($conexao,$sql );


                    while($array=mysqli_fetch_assoc($resultado)) { global $id; $id = $array['cod_usuario']?>
                        <tr>

                            <td><center> <label class="checkbox-inline"> <input type="radio" name="id" id="id" value="<?php echo $id;?>"> </label> </center></td>
                            <td> <?php echo $array['nome'];?></td>
                            <td> <?php echo $array['email'];?></td>
                            <td> <?php echo $array['telefone'];?></td>
                            <td> <?php echo $array['placa'];?></td>
                            <td> <?php echo $array['modelo'];?></td>
                        </tr>
                        <?php
                    }
                }

                listaProdutos($conexao);

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