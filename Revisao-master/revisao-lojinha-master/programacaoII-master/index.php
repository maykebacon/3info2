<?php
if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}
switch ($acao){
    case 'index';
        include 'app/views/principal/index.php';
        break;
}

//header('Location: app/controller/categoria.php');