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
            <a class="navbar-brand" href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo"></a>
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

    <!-- main -->
    <section class="container-fluid bg-color-02">
        <div class="row">
            <div class="col text-center p-5">
                <div class="mb-5">
                    <img class="img-fluid" src="<?= base_url('assets/images/main_burger_01.png') ?>" alt="O melhor burguer do mundo">
                </div>
                <div class="col text-center">
                    <h3 class="mb-5"> Deliciosos e com grandes descontos!</h3>
                    <a class="btn-products" href="<?= base_url('products') ?>">Produtos</a>
                </div>
            </div>
            <div class="col text-center p-5">
                <img class="img-fluid" src="<?= base_url('assets/images/main_burger_02.png') ?>" alt="Culinária de qualidade">
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
                Todos os direitos reservados &copy; <?= date('Y') ?>
            </div>
        </div>

    </footer>



    <!-- bootstrasp js -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>