
<div class="ui big aligned divided list" >

    <h1 style="margin-left: 40%;"> <i class="tags icon"></i> Listagem de Categorias</h1>

    <div class="ui inverted section divider"></div>

    <?php foreach($categorias as $categoria) : ?>
        <div class="item">
            <div class="content">
                <a style="margin-left: 1%;" href="?acao=show&id=<?= $categoria->getId()?>">
                    <i class="chevron right icon"></i> <?= utf8_encode($categoria->getNome()) ?>

                </a>
            </div>
        </div>

    <?php endforeach; ?>

    <div class="ui inverted section divider"></div>

</div>