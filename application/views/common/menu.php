<header>

  <div class="view">
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <img class="d-block w-100" src="<?= base_url("assets/Img/img.gif") ?>" alt="First slide">
            <div class="mask rgba-stylish-light flex-center white-text">
              <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                <li>
                  <h1 class="font-weight-bold"> Bem-Vindo ao Magic Lune Café </h1>
                </li>
                <li>
                  <p class="font-weight-bold py-4"> Está procurando por uma variedade de cafés ou chocolates? Esse é o local perfeito! </p>
                </li>
              </ul>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url("assets/Img/img2.gif") ?>" alt="Second slide">
            <div class="mask rgba-stylish-light flex-center white-text">
              <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                <li>
                  <h1 class="font-weight-bold"> Conheça a nossa história! </h1>
                </li>
                <li>
                  <p class="font-weight-bold py-4"> Venha nos visitar ou entre em contato conosoco através do telefone/e-mail! </p>
                </li>
              </ul>
          </div>
        </div>
 
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url("assets/Img/img3.gif") ?>" alt="Third slide">
          <div class="mask rgba-stylish-light flex-center white-text">
              <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                <li>
                  <h1 class="font-weight-bold"> Bateu aquela curiosidade em saber o nosso cardápio? </h1>
                </li>
                <li>
                  <p class="font-weight-bold py-4"> Confira as diversas opções de bebidas e doces na sessão de Cardápios! </p>
                </li>
              </ul>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url("assets/Img/img4.gif") ?>" alt="slide">
          <div class="mask rgba-stylish-light flex-center white-text">
              <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                <li>
                  <h1 class="font-weight-bold"> Não se esqueça de deixar a sua opinião! </h1>
                </li>
                <li>
                  <p class="font-weight-bold py-4"> Já fez a sua visita na loja hoje? Conte para todos a sua experiência! </p>
                </li>
              </ul>
          </div>
        </div>
 
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
    </div>
  </div>
</header>

<main class="text-center py-2">

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="card wow fadeInRight" data-wow-delay="0.3s">
          <div class="card-body">
            <div class="text-center">
              <h3 class="black-text">
              <i class="fas fa-comments"></i> Comentários:</h3>
                
              <?php foreach($comentarios as $row) { ?>
              <div class="avatar white z-depth-1 px-3 pt-3 pb-0">
                <ul class="list-unstyled friend-list">
                  <li class="p-2">
                  <img src="<?= base_url("assets/Img/Logo.png") ?>" alt="avatar" class="avatar rounded-circle d-flex mr-2 z-depth-1" height="50px" widht="50px">
                  <div class="text-small">
                    <strong> <?= $row->nome ?></strong>
                    <p> <?= $row->texto ?> </p>
                    </li>
                  </div>
              <?php } ?>
              </ul>
              </div>
            </div>
            </div>
          </div>
        
      <div class="col-sm-6 col-md-8">
        <div class="card wow fadeInRight" data-wow-delay="0.3s">
          <div class="card-body">
            <div class="text-center">
              <h3 class="black-text">
              <i class="fas fa-star"></i> Recomendados do dia! </h3>
                <div class="row">
                <?php foreach($prod as $item){ ?>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="<?= base_url("assets/img/Produto_".$item->prod->id.".jpg") ?>" alt="thumbnail" class="img-thumbnail" width="100px" height="100px">
                    <p><?= $item->prod->nome ?></p>
                  </div>
                  <?php } ?>
                </div>
                
                <a href="<?= base_url("magiclune/cardapio") ?>" class="btn purple-gradient"> Ver mais </a>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>