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