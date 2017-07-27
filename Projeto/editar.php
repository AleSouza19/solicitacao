<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container" style="text-align: center">
                <h1>Editar Funcionário</h1>
                <div id="poster" class="poster"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <form action="FuncionarioEditar.php" method="POST">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" name="departamento" value="<?= $this->departamento; ?>" class="form-control" id="departamento" value="<?= $this->nome; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" value="<?= $this->cpf; ?>" class="form-control" id="cpf" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="solicitado">Solicitado por</label>
                            <input type="text" name="solicitado" value="<?= $this->solicitado; ?>" class="form-control" id="solicitado" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="atribuido">Atribuido</label>
                            <input type="text" name="atribuido" value="<?= $this->atribuido; ?>" class="form-control" id="atribuido" placeholder="" required>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="entrada">Entrada</label>
                            <input type="time" name="entrada" value="<?= $this->entrada; ?>" class="form-control" id="entrada" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="saida">Saida</label>
                            <input type="time" name="saida" value="<?= $this->saida; ?>" class="form-control" id="saida" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea id="descricao" name="descricao" class="form-control" rows="3" required><?= $this->descricao; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="date" name="data" id="data" value="<?= $this->data; ?>" required >
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $this->id; ?>">
                    <div class="form-group col-xs-11">
                        <button type="submit" class="btn btn-lg  btn-primary pull-right">ALTERAR</button>
                    </div>
                    <div class="form-group ">
                        <a href="FuncionarioControle.php" class="btn btn-lg  btn-primary pull-right">LISTAR</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap-3.3.7-dist/jquery-3.2.1.min.js" type="text/javascript"></script>
    </body>
</html>
