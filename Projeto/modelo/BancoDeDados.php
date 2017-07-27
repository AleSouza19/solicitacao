<?php

class BancoDeDados {

    private static $usuario = 'root';
    private static $senha = '';
    private static $local = 'localhost';
    private static $nomeBD = 'listaGuarda';
    private static $driver = 'mysql';

    /**
     * Abre uma conexâo com o banco e retorna para o invocador
     * @return Conexão com o banco desejado e já aberta, pronta para uso.
     */
    public static function conectar() {
        try {
            $conexao = new PDO(BancoDeDados::$driver .
                    ':dbname=' . BancoDeDados::$nomeBD . ';host=' .
                    BancoDeDados::$local, 
                    BancoDeDados::$usuario, 
                    BancoDeDados::$senha);
            return $conexao;
        } catch (Exception $e) {
            echo 'Erro ao Conectar: ' . $e->getMessage();
            return null;
        }
    }
}
