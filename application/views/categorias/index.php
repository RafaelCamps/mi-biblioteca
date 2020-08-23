<section class="px-5 py-2">
    <div class="row">
        <div class="col-12 text-right p-2">
            <small><a href="<?= base_url(); ?>home"><i class="fas fa-home mr-2"></i></a> <?= $title; ?></small>
        </div>
    </div>
    <div class="row  border-bottom border-info mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class=" p-3"><?= $title; ?></h2>
            <a class="btn btn-success" href="#"><i class="fas fa-plus"></i> </a>
        </div>

    </div>
    <div class="row px-3">
        <div class="col px-md-5">
            <ul class="list-group">
                <?php foreach ($categorias as $categoria) : ?>
                    <li class="list-group-item"><a href="<?= base_url().'categorias/'.$categoria['url_cat']; ?>"><?= $categoria['nombre_cat']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>

</section>