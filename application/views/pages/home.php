<section class="p-3">
    <div class="row text-right mb-4">
        <div class="col-12">
            <small><i class="fas fa-home mr-2"></i><?= $title; ?></small>
        </div>
    </div>
    <div class="row mb-4">
        <article class="col-12 col-md-9">
            <h2 class="text-secondary border-bottom border-info pb-2 mb-2">Últimos libros añadidos</h2>
            <div class="d-flex flex-wrap">
                <?php //var_dump($libros); 
                ?>
                <div class="row row-cols-1 row-cols-lg-2">
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img class="img-fluid" src="<?= base_url();  ?>assets/img/libros/<?= $nuevos[$i]['imagen']; ?>" alt="Imagen de portada de <?= $nuevos[$i]['titulo']; ?>">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h3 class="card-title text-info text-center h3 mb-3"><a class="mb-2 text-decoration-none stretched-link" href="<?= base_url() ?>libros/<?= $nuevos[$i]['url']; ?>"><?= $nuevos[$i]['titulo']; ?></a></h3>
                                    <h4 class="text-center"><?= $nuevos[$i]['autor']; ?></h4>
                                    <p class="card-text text-center text-primary badge badge-pill badge-light mt-3 py-2"><?= $nuevos[$i]['nombre_cat']; ?>

                                    </p>

                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </article>
        <aside class="col-12 col-md-3 mt-5">
            <h5 class="bg-secondary text-white px-2 py-3 mb-0 rounded-top">Últimos libros añadidos</h5>
            <ul class="list-group list-group-flush">
                <?php foreach ($nuevos as $libro) : ?>
                    <li class="list-group-item"><a href="<?= base_url()  ?>libros/<?= $libro['url']; ?>"><?= $libro['titulo'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
</section>