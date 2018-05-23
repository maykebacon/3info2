<?php

require_once 'app/model/CategoriaCrud.php';
require_once 'app/model/ProdutoCrud.php';   

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}
switch ($acao){
    case 'index';
    $catCrud= new CategoriaCrud();
    $categoria = $catCrud->getCategorias();
        include 'app/views/principal/index.php';
        break;
}

//header('Location: app/controller/categoria.php');