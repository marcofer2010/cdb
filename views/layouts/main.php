<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Casa dos Brindes</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="img/favicon32x32.png" sizes="32x32">

    <style>
        /* Slider */
        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>



    <!-- Styles -->
    <style>
        .logo {
            margin: 0 auto 30px;
            width: 90%;
            text-align: center;
        }

        .carousel {
            margin-bottom: 2rem;
        }

        .container {
            max-width: 1200px;
        }

        .img-responsive,
            {
            display: block;
            max-width: 100%;
            height: auto;
        }
    </style>





    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <nav class="navbar bg-faded navbar-expand-sm navbar-light bg-light d-none d-sm-block">
        <div class="container">
            <ul class="nav pull-sm-left">
                <li class="nav-item col-sm-1">
                    <a class="nav-link" href="#"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li class="nav-item col-sm-1">
                    <a class="nav-link" href="#"><span class="fab fa-instagram"></span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-logo mx-auto">
                <li class="nav-item">
                    <a><i class="fa fa-phone"></i> (41) 3332-6446 | <i class="fab fa-whatsapp"></i> (41) 3093-6428</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-sm-right">
                <a class="text-center"><i class="far fa-envelope"></i> brindes@casadosbrindes.com.br</a>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 logo">
                <a href="http://casadosbrindes.com.br">
                    <img src="img/logo.png" alt="Casa dos Brindes (41) 3332-6446" class="img-responsive" id="logosite" title="Casa dos Brindes (41) 3332-6446"> </a>
            </div>
            <div class="col-md-5" style="padding-top: 35px;">
                <form id="" method="get" class="" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Product Search" placeholder="Qual brinde você está procurando? :)" value="" name="s" id="" autocomplete="off">
                        <input type="hidden" value="product" name="post_type">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-3" style="padding-top: 35px;">
                <div class="btn-group d-none d-sm-block float-right">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        0 Item
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div style="border-top: 1px solid #e4e4e4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-list"></i> BRINDES POR CATEGORIA
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">QUEM SOMOS</a>
                                <a class="dropdown-item" href="#">CONTATO</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BRINDES POR SEGMENTO
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Dia do marquinho</a>
                                <a class="dropdown-item" href="#">dias dos pais</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PERSONALIZAÇÃO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">QUEM SOMOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTATO</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Todas as categorias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">QUEM SOMOS</a>
                                <a class="dropdown-item" href="#">CONTATO</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                </div>
            </div>
        </nav>
    </div>
    <div class="" style="background-color: black; max-width: 100%;">
        <div class="row" style="padding-left: 2%; max-width: 100%; text-align: center;">
            <div class="col-md-2" style="padding-top: 10px; padding-bottom: 10px;">
                <img style="max-width: 100%;" src="img/barra_superior/EXCLUSIVO.png">
            </div>
            <div class="col-md-2" style="padding-top: 10px; padding-bottom: 10px;">
                <img style="max-width: 100%;" src="img/barra_superior/ORCAMENTO_RAPIDO.png">
            </div>
            <div class="col-md-2" style="padding-top: 10px; padding-bottom: 10px;">
                <img style="max-width: 100%;" src="img/barra_superior/ATENDIMENTO.png">
            </div>
            <div class="col-md-2" style="padding-top: 10px; padding-bottom: 10px;">
                <img style="max-width: 100%;" src="img/barra_superior/QUALIDADE.png">
            </div>
            <div class="col-md-2" style="padding-top: 10px; padding-bottom: 10px;">
                <img style="max-width: 100%;" src="img/barra_superior/SEU_PEDIDO.png">
            </div>
            <div class="col-md-2" style="padding-top: 10px; padding-bottom: 10px;">
                <img style="max-width: 100%;" src="img/barra_superior/ENVIAMOS.png">
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/carro1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carro2.png" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="wrap">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <div class="slide_clients" style="background-color: black">
        <div class="container">
            <div class="customer-logos">
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image2.png">
                </div>
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image3.png">
                </div>
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image4.png">
                </div>
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image5.png">
                </div>
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image6.png">
                </div>
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image7.png">
                </div>
                <div class="slide"><img src="https://www.solodev.com/assets/carousel/image8.png">
                </div>
            </div>
        </div>
    </div>

    <footer class="footer" style="background-color: #eaeaea;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="border-bottom: 1px solid gray; border-right: 1px solid gray; text-align: center;
                    padding-top: 4rem;">
                    <a href="http://casadosbrindes.com.br">
                        <img src="img/logo.png" alt="Casa dos Brindes (41) 3332-6446" title="Casa dos Brindes (41) 3332-6446" style="margin-bottom: 4rem;">
                    </a>
                </div>
                <div class="col-md-4" style="border-bottom: 1px solid gray; border-right: 1px solid gray; text-align: center;
                    padding-top: 4rem;">
                    <div class="wpb_wrapper">
                        <p><span style="color: #ff6600;">CONTATO</span><strong><br>
                            </strong>Rua Roberto Koch, 201<br>
                            Lindóia, Curitiba - PR<br>
                            Cep: 81010-220<br>
                            <i class="fa fa-phone"></i><strong>&nbsp;(41) 3332-6446&nbsp;</strong></p>
                    </div>
                </div>
                <div class="col-md-4" style="border-bottom: 1px solid gray; border-right: 1px solid gray; text-align: center;
                    padding-top: 4rem;">
                    <h5>AREA PARA BAIXAR O CATALOGO</h5>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-12">
                    <p style="text-align: center;"><span style="color: #999999;">
                            <small>Copyright © 2019. Casa dos Brindes. TODOS OS DIREITOS RESERVADOS. Todo o conteúdo
                                do site, todas as fotos,
                                imagens, dizeres, som, software, conjunto imagem,<br>
                                layout, aqui veiculados são de propriedade exclusiva da
                                <strong>Casa dos Brindes LTDA.</strong>
                                <br>
                            </small>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js" defer></script>
<script>
    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    });
</script>

</html>
<?php $this->endPage() ?>