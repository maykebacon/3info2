<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 26/04/18
 * Time: 15:58
 */

    if (isset($_GET['acao'])){
        $acao = $_GET['acao'];
    }else{
        $acao = 'index';
    }

    switch ($acao) {
        case 'index';
            include '../views/produtos/index.php';
            break;

        case 'show';
            include '../views/show.php';

    }