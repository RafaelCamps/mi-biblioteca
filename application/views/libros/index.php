<section class="p-4">
    <div class="row text-right mb-2">
        <div class="col-12">
            <small><a href="home"><i class="fas fa-home mr-2"></i></a> > <?= $title; ?></small>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-info border-bottom border-info p-2"><?= $title; ?></h2>
            <div class="d-flex flew-wrap">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <?php foreach ($libros as $libro) : ?>
                        <article class="d-flex flex-wrap justify-content-center justify-content-md-start my-2 border-bottom p-2">
                            <div>
                                <img class="img-fluid" src="<?= base_url();  ?>assets/img/libros/<?= $libro['imagen']; ?>" alt="Imagen de portada de <?= $libro['titulo']; ?>">
                            </div>
                            <div class="datos p-2 p-md-4 w-100 w-md-75 d-flex flex-column justify-content-between">
                                <!-- <div class="p-4 d-flex flex-grow-1 justify-content-between flex-wrap"> -->

                                <h3 class="text-info mt-2 text-center"><?= $libro['titulo']; ?></h3>
                                <p class="text-center"><?= $libro['autor']; ?></p>
                                <div>
                                    <p class="text-secondary d-flex justify-content-between"><small>Editorial: <?= $libro['editorial']; ?></small><small>Categoría: <span class="text-info"><?= $libro['nombre_cat']; ?></span> </small></p>
                                    <!-- <p><?= $libro['resumen']; ?></p> -->
                                    <p><a class="btn btn-info btn-block stretched-link " href="<?= site_url('/libros/') . $libro['url']; ?>">Ver ficha</a></p>
                                </div>


                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
</section>