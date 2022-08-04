<form class="text-center p-5" action="#" method="post" enctype="multipart/form-data">
    <?= validation_errors('<div class="alert alert-info">', '</div>') ?>
    <p class="h4 mb-3"> Inserir/Alterar Produto </p>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="text" id="nome" name="prod[nome]" value="<?= set_value('prod[nome]') ?>" class="form-control mb-4" placeholder="Nome">
        </div>
    </div>

    <p class="h4 mb-3"> Categoria </p>
    <div class="row">
        <div class="col-md-6 offset-md-3 mb-4">
            <?php foreach($categoria as $row){ ?>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="categoria<?= $row->id ?>" name="prod[categoria]" value="<?= $row->id ?>" <?= set_value('prod[categoria]') == $row->id ? "checked" : "" ?>>
                <label class="custom-control-label" for="categoria<?= $row->id ?>"><?= $row->nome ?></label>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">  
        <div class="input-group">
            <div class="input-group-prepend mb-4">
                <span class="input-group-text" id="inputGroupFileAddon01"> Imagem </span>
            </div>
            <div class="custom-file">
                <input type="file" name="imagem" id="imagem">
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <textarea class="form-control rounded-0" name="prod[texto]" id="texto" rows="3" placeholder="Texto sobre o produto"><?= set_value('prod[texto]') ?></textarea>
            </div>
        </div>
    </div>

    <button class="btn btn aqua-gradient" type="submit"> Salvar </button>

</form>