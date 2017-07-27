<?php
$GLOBALS["dir"] = "";
require_once './includes/header.php';
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container" style="text-align: center">
        <h1>Lista do Guarda</h1>
        <div id="poster" class="poster"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <form action="controle/FuncionarioControle.php" method="POST">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <input type="text" name="departamento" class="form-control" id="departamento" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="solicitado">Solicitado por</label>
                    <input type="text" name="solicitado" class="form-control" id="solicitado" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="atribuido">Atribuido</label>
                    <input type="text" name="atribuido" class="form-control" id="atribuido" placeholder="" required>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="form-group">
                    <label for="entrada">Entrada</label>
                    <input type="time" name="entrada" class="form-control" id="entrada" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="saida">Saida</label>
                    <input type="time" name="saida" class="form-control" id="saida" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" name="descricao" placeholder="Digite o texto..." class="form-control" rows="5" required></textarea>
                </div>                  
                <input type="hidden" name="data" value="<?= date('y/m/d') ?>" >
            </div>
            <div class="form-group col-xs-11">
                <button type="submit" class="btn btn-lg  btn-primary pull-right">SALVAR</button>
            </div>
            <div class="form-group ">
                <a href="controle/FuncionarioControle.php" class="btn btn-lg  btn-primary pull-right">LISTAR</a>
            </div>
        </form>
    </div>
</div>
<?php require_once './includes/footer.php'; ?>
