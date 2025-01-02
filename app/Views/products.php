<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIGBurguer</title>
    <!-- favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">
    <!-- bootstrap csss-->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- custom css-->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!--nav bar -->
    <nav class="navbar navbar-expand-sm navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url('/')?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link ms-3" href="<?= base_url('/') ?>">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="<?= base_url('products') ?>">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="<?= base_url('where_we_are') ?>">Onde Estamos?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main section -->
     <section class="container">
        <div class="col">
            <!--burguer 01 -->
            <div class="row mt-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png')?>" alt="Burguer 01">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Classic</h1>
                    <p class="mb-3 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eaque vitae ipsa, quasi qui optio doloribus sit aspernatur! Provident rem quam blanditiis nulla beatae pariatur nisi consequuntur architecto quia ex?
                    Nemo nostrum fugit labore voluptatibus deleniti culpa voluptas et, voluptate vero, sint perferendis ut provident non laudantium iste omnis molestiae at! Dignissimos voluptatum assumenda, repellat unde tempore aut quibusdam architecto.</p>
                    <h2 class="mt-3 product-text-color">19,90R$</h2>

                    <div class="col mt-4">
                        <a class="btn-products" href="#">Comprar</a>
                        <a class="btn-products" href="#">Ver mais</a>
                    </div>
                </div>
            </div>

            <!--burguer 02 -->
            <div class="row mt-0 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Sheelder</h1>
                    <p class="mb-3 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eaque vitae ipsa, quasi qui optio doloribus sit aspernatur! Provident rem quam blanditiis nulla beatae pariatur nisi consequuntur architecto quia ex?
                    Nemo nostrum fugit labore voluptatibus deleniti culpa voluptas et, voluptate vero, sint perferendis ut provident non laudantium iste omnis molestiae at! Dignissimos voluptatum assumenda, repellat unde tempore aut quibusdam architecto.</p>
                    <h2 class="mt-3 product-text-color">21,90R$</h2>
                    <div class="col mt-4">
                        <a class="btn-products" href="#">Comprar</a>
                        <a class="btn-products" href="#">Ver mais</a>
                    </div>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png')?>" alt="Burguer 02">
                </div>
            </div>

             <!--burguer 03 -->
             <div class="row mt-5 product-box">
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png')?>" alt="Burguer 03">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burguer </h1>
                    <p class="mb-3 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eaque vitae ipsa, quasi qui optio doloribus sit aspernatur! Provident rem quam blanditiis nulla beatae pariatur nisi consequuntur architecto quia ex?
                    Nemo nostrum fugit labore voluptatibus deleniti culpa voluptas et, voluptate vero, sint perferendis ut provident non laudantium iste omnis molestiae at! Dignissimos voluptatum assumenda, repellat unde tempore aut quibusdam architecto.</p>
                    <h2 class="mt-3 product-text-color">30,90R$</h2>

                    <div class="col mt-4">
                        <a class="btn-products" href="#">Comprar</a>
                        <a class="btn-products" href="#">Ver mais</a>
                    </div>
                </div>
            </div>

             <!--burguer 04 -->
             <div class="row mt-0 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Classic Duplo</h1>
                    <p class="mb-3 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eaque vitae ipsa, quasi qui optio doloribus sit aspernatur! Provident rem quam blanditiis nulla beatae pariatur nisi consequuntur architecto quia ex?
                    Nemo nostrum fugit labore voluptatibus deleniti culpa voluptas et, voluptate vero, sint perferendis ut provident non laudantium iste omnis molestiae at! Dignissimos voluptatum assumenda, repellat unde tempore aut quibusdam architecto.</p>
                    <h2 class="mt-3 product-text-color">42,90R$</h2>

                    <div class="col mt-4">
                        <a class="btn-products" href="#">Comprar</a>
                        <a class="btn-products" href="#">Ver mais</a>
                    </div>
                </div>
                <div class="col-5 text-center">
                    <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png')?>" alt="Burguer 04">
                </div>
            </div>
        </div>
     </section>

    <!-- social media -->
    <footer class="container-fluid mt-5">

        <div class="row justify-content-center">

            <div class="col-6 d-flex flex-row justify-content-center">

                <div class="col-md-2 text-center mx-4">
                    <a href="#"><img src="<?= base_url('assets/images/facebook.png') ?>" alt="facebook"></a>
                </div>
                <div class="col-md-2 text-center mx-4">
                    <a href="#"><img src="<?= base_url('assets/images/instagram.png') ?>" alt="instagram"></a>
                </div>
                <div class="col-md-2 text-center mx4">
                    <a href="#"><img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="whatsapp"></a>
                </div>

            </div>
        </div>

        <div class="div row mt-5">
            <div class="div col text-center">
                Todos os direitos reservados &copy; <?=date('Y')?>
            </div>
        </div>

    </footer>



    <!-- bootstrasp js -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>