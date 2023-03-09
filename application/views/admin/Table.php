<div class="clearfix mt-5 mb-5">
    <div class="container-fluid">
    <a href="<?= base_url("../magicLune/adm/form_produto") ?>"> <button class="btn purple-gradient"> Inserir </button></a>
        <table class="table white">
            <thead class="purple-gradient white-text">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descrição</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($dados as $key => $row){ ?>
                <tr>
                <th scope="row"><?= $key ?></th>
                    <td><?= $row->nome ?></td>
                    <td><?= $row->cat->nome ?></td>
                    <td><?= $row->texto ?></td>
                    <td><a href="<?= base_url("../magicLune/Adm/edita_form_produto/$row->id") ?>"><i class="fas fa-edit mr-3 purple-text" title="Editar"></i></a></td>
                    <td><a href="<?= base_url("../magicLune/Adm/remove_form_produto/$row->id") ?>"><i class="fas fa-trash mr-3 purple-text" title="Excluir"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>