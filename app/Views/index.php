<?= $this->extend('layouts/default');?>

<?= $this->section('content');?>

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

<?= $this->endSection();?>