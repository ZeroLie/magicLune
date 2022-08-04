<form class="text-center p-5" action="#" method="post">
    <?= validation_errors('<div class="alert alert-info">', '</div>') ?>
    <p class="h4 mb-3"> Inserir Comentário </p>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="text" id="nome" name="comentario[nome]" value="<?= set_value('comentario[nome]') ?>" class="form-control mb-4" placeholder="Nome">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <textarea class="form-control rounded-0" name="comentario[texto]" id="texto" rows="3" placeholder="Comentário"><?= set_value('comentario[texto]') ?></textarea>
            </div>
        </div>
    </div>

    <button class="btn btn aqua-gradient" type="submit"> Salvar </button>

</form>