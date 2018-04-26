<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 25/04/18
 * Time: 13:33
 */
require_once 'conexao.php';

    class CategoriaCrud{
        private $conexao;

        public function __construct()
        {
            $con = new Conexao();
            $this->conexao = conexao::getConexao();
        }

        public function getCategoria(){

        $this->conexao = Conexao::getConexao();

        $sql = 'select * from categoria';

        $result = $this->conexao->query($sql);

        $categoria = $result->fetch(PDO::FETCH_ASSOC);

        $objcat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);

        return $objcat;
    }

}