<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            tr:hover {
                cursor: pointer;
            }
        </style>
    </head>
    <body>

        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1 class="">CONTROLE DE ACESSO</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2><?= date('d/m/y') ?></h2>
                    <input class="btn btn-default" type="button" name="imprimir" value="Imprimir" onclick="window.print();">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Departamento</th>
                                <th>CPF</th>
                                <th>Solicitado por</th>
                                <th>Atribuído</th>
                                <th>Horario Entrada</th>
                                <th>Horário Saida</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $resultado = $this->consultaFuncionario();
                            while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr onclick="location.href = 'FuncionarioEditar.php?id=<?php echo $linha['id'] ?>'">
                                    <td><?php echo $linha['departamento'] ?></td>
                                    <td><?php echo $linha['cpf'] ?></td>
                                    <td><?php echo $linha['solicitado'] ?></td>
                                    <td><?php echo $linha['atribuido'] ?></td>
                                    <td><?php echo $linha['entrada'] ?></td>
                                    <td><?php echo $linha['saida'] ?></td>
                                    <td><?php echo $linha['descricao'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap-3.3.7-dist/jquery-3.2.1.min.js" type="text/javascript"></script>
    </body>
</html>