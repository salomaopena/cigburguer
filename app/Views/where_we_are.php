<?= $this->extend('layouts/default');?>

<?= $this->section('content');?>
<!-- main section -->

<section class="container product-box py-5">
    <div class="row">
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="">
        </div>
        <div class="col-7">
            <p class="where-we-are-title mt-0">
                CIGBurguer Uberlândia
            </p>
            <p class="where-we-are-subtitle">
                Rua Burguer Deliciosos, 1234, Uberlândia
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum pariatur voluptate dolorum modi similique, exercitationem vitae consequatur, laboriosam maiores tempore iste debitis quibusdam officiis rem est dolor deleniti laudantium. Ipsa.
            </p>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                <span class="where-we-are-text ms-3"><a class="where-we-are-text" href="tel:+5511999999999">+55 (34) 99999-9999</a></span>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email">
                <span class="where-we-are-text ms-3"><a class="where-we-are-text" href="email:contato@burguer.com">contato@cigburguer.com</a></span>
            </div>
        </div>
    </div>
</section>


<!-- map -->
<section class="container product-box py-5">
    <div class="row">
        <div class="col-12 text-center">
            <img src="assets/images/map.jpg" alt="Mapa">
        </div>
    </div>
</section>

<?= $this->endSection();?>