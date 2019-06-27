<div class="site-index">
    <div class="container">
        <h4 style="text-align: center; padding-bottom: 2rem;">CATEGORIAS EM DESTAQUE</h4>
        <div class="row" style="text-align: center;">
            <?php foreach ($categories as $key => $value) : ?>
                <div class="col-md-3">
                    <?php if ($value->photo) { ?>
                        <img class="rounded-circle border border border-info" src="<?=$value->photo?>" width="140" height="140">
                    <?php } else { ?>
                        <img class="rounded-circle border border border-info" src="/img/products/sem-foto.jpg" width="140" height="140">
                    <?php } ?>
                    <h5><?= $value['name'] ?></h5>
                </div>
            <?php endforeach ?>


        </div>
    </div>

    <div class="container d-none d-sm-block">
        <h4 style="text-align: center; padding-top: 4rem;">SUPER LANÇAMENTOS</h4>
        <div class="row" style="text-align: center;">
            <div class="col-md-6" style="padding: 2rem;">
                <img class="" src="img/banner-lancamentos/banner-cadernos-em-couro-sintetico-min.jpg" width="550" height="230" alt="">
            </div>
            <div class="col-md-6" style="padding: 2rem;">
                <img class="" src="img/banner-lancamentos/banner-caneta-bronze-amarelo.jpg" width="550" height="230" alt="">
            </div>
            <div class="col-md-6" style="padding: 2rem;">
                <img class="" src="img/banner-lancamentos/banner-caneta-impy-min.jpg" width="550" height="230" alt="">
            </div>
            <div class="col-md-6" style="padding: 2rem;">
                <img class="" src="img/banner-lancamentos/banner-caneta-plastica-color-amarelo.jpg" width="550" height="230" alt="">
            </div>
        </div>
    </div>



    <spotlight_products></spotlight_products>



</div>