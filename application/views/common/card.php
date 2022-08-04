<div class="clearfix mt-5 mb-5">
  <div class="container">
    <?php foreach($cat_prod as $item){ ?>

    <p class="h2 text-center"><?= $item->nome ?></p>
    
      <div class="row">
        <?php foreach($item->prod as $row){ ?>

        <div class="col-md-4">
        <div class="card">

          <img class="card-img-top" src="<?= base_url("assets/img/produto_$row->id.jpg") ?>" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><a><?= $row->nome ?></a></h4>
              <p class="card-text"><?= $row->texto ?></p>

          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <?php } ?>
</div>
</div>