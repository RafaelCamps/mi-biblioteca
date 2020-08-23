<section class="px-5 py-2 d-flex flex-column justify-content-between">
    <div class="row text-right mb-2">
        <div class="col-12">
            <small><a href="home"><i class="fas fa-home mr-2"></i></a> > <a href="<?= base_url();  ?>libros">Libros</a> > <?= $title; ?></small>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <img src="<?= base_url();  ?>assets/img/libros/no-image.png" alt="">
        </div>
        <div class="col-md-7">
            <h2 class="display-4"><?= $title; ?></h2>
            <h3><?= $libro['autor']; ?></h3>
            <h5><?= $libro['categoria']; ?></h5>
            <p><?= $libro['resumen']; ?></p>

        </div>
    </div>
    <div class="row d-flex justify-content-between p-3">
        <div class="col-md-6">
            <a class="btn btn-info mr-3" href="<?= base_url(); ?>libros"><i class="far fa-arrow-alt-circle-left mr-3"></i>Volver</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-warning mr-3" href="<?= base_url(); ?>libros/editar/<?= $libro['url']; ?>"><i class="fas fa-pen mr-3"></i>Editar</a>
            <?= form_open('/libros/borrar/' . $libro['id_libro']); ?>
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt mr-3"></i>Borrar</button>
            </form>
        </div>
    </div>

</section>