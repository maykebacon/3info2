<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 26/04/18
 * Time: 16:15
 */
require_once 'conexao.php';
require_once 'produto.php';
class produtoCrud
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = conexao::getConexao();
    }

    public function getProdutos(){
        $sql = 'SELECT * FROM produto';
        $resultado = $this->conexao->query($sql);
        $arr_prod = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaObjsProd = []; //array que começa vazio;

        foreach ($arr_prod as $prod){
            $id = $prod['id_produto']; //dados vindos da consulta
            $nome = $prod['nome_produto'];
            $descricao = $prod['descricao_produto'];
            $foto = $prod['foto_produto'];
            $preco = $prod['preco_produto'];
            $id_categoria = $prod['id_categoria'];

            $objProd = new Produto ($id,$nome, $descricao, $foto, $preco, $id_categoria);
            $listaObjsProd[] = $objProd;
        }
        return $listaObjsProd;
    }
}