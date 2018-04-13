<?php
    require_once '../modelos/CategoriaCrud.php';

        if (isset($_GET['acao'])){
            $acao = $_GET['acao'];
        }else{
            $acao = 'index';
        }
        switch($acao){
            case 'index':

                $crud = new CategoriaCrud();
                $categorias = $crud->getCategorias();
                include '../templates/cabecalho.php';
                include '../visoes/categoria/index.php';
                include '../templates/rodape.php';
                break;

            case 'show':
                $id = $_GET['id'];
                $crud = new CategoriaCrud();
                $categoria = $crud->getCategoria($id);
                include '../templates/cabecalho.php';
                include '../visoes/categoria/show.php';
                include '../templates/rodape.php';
                break;

        }

