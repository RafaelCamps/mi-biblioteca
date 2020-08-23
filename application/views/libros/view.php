<section class="px-5 py-2 d-flex flex-column justify-content-between">
    <div class="row text-right mb-2">
        <div class="col-12">
            <small><a href="<?= base_url(); ?>home"><i class="fas fa-home mr-2"></i></a> > <a href="<?= base_url();  ?>libros">Libros</a> > <?= $title; ?></small>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <img class="img-fluid" src="<?= base_url();  ?>assets/img/libros/<?= $libro['imagen']; ?>" alt="Imagen de portada de <?= $libro['titulo']; ?>">
        </div>
        <div class="col-md-7">
            <h2 class="display-4"><?= $title; ?></h2>
            <h3><?= $libro['autor']; ?></h3>
            <h5><?= $libro['nombre_cat']; ?></h5>
            <p><?= $libro['resumen']; ?></p>

        </div>
    </div>
    <div class="row d-flex justify-content-between p-3">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <a class="btn btn-info" href="<?= base_url(); ?>libros"><i class="far fa-arrow-alt-circle-left mr-3"></i>Volver</a>
        </div>
        <div class="col-sm-8 d-flex justify-content-center justify-content-md-end">
            <a class="btn btn-warning mr-3" href="<?= base_url(); ?>libros/editar/<?= $libro['url']; ?>"><i class="fas fa-pen mr-md-3"></i>Editar</a>
            <?= form_open('/libros/borrar/' . $libro['id_libro']); ?>
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt mr-3"></i>Borrar</button>
            </form>
        </div>
    </div>

</section>