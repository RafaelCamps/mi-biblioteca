<section class="p-4">
    <div class="row text-right mb-2">
        <div class="col-12">
            <small><a href="home"><i class="fas fa-home mr-2"></i></a> > <?= $title; ?></small>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-info border-bottom border-info p-2"><?= $title; ?></h2>
            <?php foreach ($libros as $libro) : ?>
                <article class="d-flex flex-wrap justify-content-center justify-content-md-start my-2 border-bottom ">
                    <div>
                        <img src="<?= base_url(); ?>assets/img/libros/no-image.png" alt="">
                    </div>
                    <div class="p-4 w-75">
                        <!-- <div class="p-4 d-flex flex-grow-1 justify-content-between flex-wrap"> -->
                        <div class="datos">
                            <h3><?= $libro['titulo']; ?></h3>
                            <p><?= $libro['autor']; ?></p>
                            <p class="text-secondary d-flex justify-content-between"><small>Editorial: <?= $libro['editorial']; ?></small><small>Categoría: <span class="text-info"><?= $libro['categoria']; ?></span> </small></p>
                            <!-- <p><?= $libro['resumen']; ?></p> -->
                            <p><a class="btn btn-outline-info btn-block" href="<?= site_url('/libros/') . $libro['url']; ?>">Ver ficha</a></p>
                        </div>
                        <!-- <div class="botones">
                            <a class="btn btn-warning" href="http://"><i class="fas fa-pen"></i></a>
                            <a class="btn btn-danger" href="http://"><i class="fas fa-trash-alt"></i></a>
                        </div> -->

                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>