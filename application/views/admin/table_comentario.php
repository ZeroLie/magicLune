<div class="clearfix mt-5 mb-5">
    <div class="container-fluid">
        <table class="table white">
            <thead class="purple-gradient white-text">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Comentario</th>
                <th scope="col">Excluir</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($comentario as $key => $row){ ?>
                <tr>
                <th scope="row"><?= $key ?></th>
                    <td><?= $row->nome ?></td>
                    <td><?= $row->texto ?></td>
                    <td><a href="<?= base_url("Adm/remove_comentario/$row->id") ?>"><i class="fas fa-trash mr-3 purple-text" title="Excluir"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>