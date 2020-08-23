<section class="p-3">
    <div class="row text-right mb-4">
        <div class="col-12">
            <small><i class="fas fa-home mr-2"></i><?= $title; ?></small>
        </div>
    </div>
    <div class="row mb-4">
        <article class="col-12 col-md-9">
            <h2>Últimos libros añadidos</h2>
            <div class="d-flex flex-wrap">
                <?php //var_dump($libros); 
                ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <?php foreach ($libros as $libro) : ?>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="<?= base_url()  ?>assets/img/libros/no-image.png" class="card-img-top" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-info text-center h4 mb-3"><a class="mb-2 text-decoration-none stretched-link" href="<?= base_url() ?>libros/<?= $libro['url']; ?>"><?= $libro['titulo']; ?></a></h5>
                                    <p class="card-text text-center"><?= $libro['categoria']; ?>

                                    </p>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </article>
        <aside class="col-12 col-md-3">
            <h5>Los diez últimos añadidos</h5>
            <ul>
                <?php foreach ($libros as $libro) : ?>
                    <li><a href="<?= base_url()  ?>libros/<?= $libro['url']; ?>"><?= $libro['titulo'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
    <!-- <div class="row">
        <article class="col-12 col-md-9">
            <h2>Los mejor valorados!!</h2>
            Contenido
        </article>
        <aside class="col-12 col-md-3">
            <h5>Los diez mejor valorados</h5>
            <ul>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
                <li><a href="#">Libro</a></li>
            </ul>
        </aside>
    </div> -->
</section>