<section class="p-4">
    <h2 class="mb-3 text-center text-info"><?= $title; ?></h2>
    <div>
        <?= validation_errors(); ?>
    </div>

    <?= form_open('libros/update'); ?>
    <input type="hidden" name="id" value="<?= $libro['id_libro']; ?>">
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $libro['titulo'];  ?>">
        <small id="tituloError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" value="<?= $libro['autor'];  ?>">
        <small id="autorError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="editorial">Editorial</label>
        <input type="text" class="form-control" id="editorial" name="editorial" value="<?= $libro['editorial'];  ?>">
        <small id="editorialError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="categoria">Categoría</label>
        <select class="form-control" id="categorias" name="categoria">
            <option value="<?= $libro['categoria'];  ?>" selected disabled><?= $libro['nombre_cat'];  ?></option>
            <?php foreach ($categorias as $categoria) : ?>
                <option value="<?= $categoria['id_categoria']; ?>"><?= $categoria['nombre_cat']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="resumen">Resumen</label>
        <textarea class="form-control" name="resumen" id="resumen" rows="8"><?= $libro['resumen'];  ?></textarea>
        <small id="autorError" class="form-text text-muted"></small>
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-danger text-uppercase" href="<?= base_url(); ?>libros/<?= $libro['url'];  ?>"><i class="far fa-times-circle mr-3"></i>Cancelar</a>
        <button type="submit" class="btn btn-outline-info w-50 text-uppercase"><i class="far fa-check-circle mr-3"></i>Guardar cambios</button>
    </div>

    </form>

</section>