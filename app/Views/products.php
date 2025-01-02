<?= $this->extend('layouts/default'); ?>

<?= $this->section('content'); ?>

<!-- main section -->
<section class="container">
    <div class="col">
        <!--burguer 01 -->
        <div class="row mt-5 product-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burguer 01">
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
                <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burguer 02">
            </div>
        </div>

        <!--burguer 03 -->
        <div class="row mt-5 product-box">
            <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burguer 03">
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
                <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burguer 04">
            </div>
        </div>
    </div>
</section>


<?= $this->endSection(); ?>