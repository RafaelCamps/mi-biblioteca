<section class="px-5 py-2">
    <div class="row text-right mb-2">
        <div class="col-12">
            <small><a href="<?= base_url(); ?>home"><i class="fas fa-home mr-2"></i></a> > <a href="<?= base_url();  ?>libros">Libros</a> > <a href="<?= base_url(); ?>/categorias">Categorias</a> > <?= $title; ?></small>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-9">
            <h2 class="text-secondary border-bottom border-info pb-2 mb-2"><?= $title; ?></h2>
            <div class="d-flex flex-wrap">
                <!-- <?php //var_dump($libros); 
                        ?> -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <?php foreach ($libros as $libro) : ?>
                        <article class="col mb-4 p-1">
                            <div class="card h-100">
                                <img class="img-fluid" src="<?= base_url();  ?>assets/img/libros/<?= $libro['imagen']; ?>" alt="Imagen de portada de <?= $libro['titulo']; ?>">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h3 class="card-title text-info text-center h4 mb-3"><a class="mb-2 text-decoration-none stretched-link" href="<?= base_url() ?>libros/<?= $libro['url']; ?>"><?= $libro['titulo']; ?></a></h3>
                                    <h5 class="text-center"><?= $libro['autor']; ?></h5>
                                    <!-- <p class="card-text text-center text-primary badge badge-pill badge-light mt-3 py-2"><?= $libro['nombre_cat']; ?> -->

                                    </p>

                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <aside class="col-12 col-md-3 mt-5">
            <h5 class="bg-secondary text-center  px-2 py-3 mb-0 rounded-top"><a class="text-decoration-none text-white" href="<?= base_url(); ?>categorias">Categorías</a></h5>
            <ul class="list-group list-group-flush">
                <?php foreach ($categorias as $categoria) : ?>
                    <li class="list-group-item"><a class="text-decoration-none" href="<?= base_url()  ?>categorias/<?= $categoria['url_cat']; ?>"><?= $categoria['nombre_cat'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
</section>