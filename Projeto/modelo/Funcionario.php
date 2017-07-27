<?php

class Funcionario {

    public $id;
    public $departamento;
    public $cpf;
    public $solicitado;
    public $atribuido;
    public $entrada;
    public $saida;
    public $descricao;
    public $data;

    public function __construct() {
        
    }

    public function construtor($departamento, $cpf, $solicitado, $atribuido, $entrada, $saida, $descricao, $data) {
        $this->departamento = $departamento;
        $this->cpf = $cpf;
        $this->solicitado = $solicitado;
        $this->atribuido = $atribuido;
        $this->entrada = $entrada;
        $this->saida = $saida;
        $this->descricao = $descricao;
        $this->data = $data;
    }

    /**
     * Salva dados do objeto Funcionario no banco de dados
     */
    public function salvarFuncionario() {
        $conexao = BancoDeDados::conectar(); //abre conexão
        //cria um comando que nao pode ser alterado
        $sql = $conexao->prepare('INSERT INTO funcionario(departamento, cpf,'
                . 'solicitado,atribuido, entrada, saida, descricao, data)'
                . ' VALUES( :1,:2,:3,:4,:5,:6,:7,:8)');

        $sql->bindValue(':1', $this->departamento);
        $sql->bindValue(':2', $this->cpf);
        $sql->bindValue(':3', $this->solicitado);
        $sql->bindValue(':4', $this->atribuido);
        $sql->bindValue(':5', $this->entrada);
        $sql->bindValue(':6', $this->saida);
        $sql->bindValue(':7', $this->descricao);
        $sql->bindValue(':8', $this->data);
        $sql->execute();
    }

    public function alteraFuncionario($id, $departamento, $cpf, $solicitado, $atribuido, $entrada, $saida, $descricao, $data) {
        $conexao = BancoDeDados::conectar(); //abre conexão
        $comando = $conexao->prepare("UPDATE funcionario SET departamento = :departamento, cpf = :cpf, solicitado = :solicitado, atribuido = :atribuido, entrada = :entrada, saida = :saida, descricao = :descricao, data = :data WHERE id = :id");
        $comando->bindValue(':id', $id);
        $comando->bindValue(':departamento', $departamento);
        $comando->bindValue(':cpf', $cpf);
        $comando->bindValue(':solicitado', $solicitado);
        $comando->bindValue(':atribuido', $atribuido);
        $comando->bindValue(':entrada', $entrada);
        $comando->bindValue(':saida', $saida);
        $comando->bindValue(':descricao', $descricao);
        $comando->bindValue(':data', $data);
        return $comando->execute();
    }

    public function consultaFuncionario() {
        $conexao = BancoDeDados::conectar();
        $consulta = $conexao->query("SELECT * FROM funcionario");
        return $consulta;
    }

    public function consultaFuncionarioId($id) {
        $conexao = BancoDeDados::conectar();
        $consulta = $conexao->query("SELECT * FROM funcionario where id=$id");
        if ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->id = $row['id'];
            $this->departamento = $row['departamento'];
            $this->cpf = $row['cpf'];
            $this->solicitado = $row['solicitado'];
            $this->atribuido = $row['atribuido'];
            $this->entrada = $row['entrada'];
            $this->saida = $row['saida'];
            $this->descricao = $row['descricao'];
            $this->data = $row['data'];
            return $consulta;
        }
    }

    public function mostrar() {
        $resultado = $this->consultaFuncionario();
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
            print_r($linha);
        }
    }

    public function cadastrar() {
        require_once '../index.php';
    }

    public function mostraPaginaLista() {
        include '../lista.php';
    }

    public function mostraPaginaAlteracao($id) {
        $this->consultaFuncionarioId($id);
        include '../editar.php';
    }
}
