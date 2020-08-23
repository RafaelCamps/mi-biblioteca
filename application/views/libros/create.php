<section class="p-4">
    <h2 class="mb-3 text-center text-info"><?= $title; ?></h2>
    <div>
        <?= validation_errors(); ?>
    </div>

    <?= form_open_multipart('libros/nuevo'); ?>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insertar el título del libro">
        <small id="tituloError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="Insertar el autor del libro">
        <small id="autorError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="editorial">Editorial</label>
        <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Insertar la editorial del libro">
        <small id="editorialError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="categoria">Categoría</label>
        <select class="form-control" id="categorias" name="categoria">
            <option value="" selected disabled>Escoge una categoría</option>
            <?php foreach ($categorias as $categoria) : ?>
                <option value="<?= $categoria['id_categoria']; ?>"><?= $categoria['nombre_cat']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label class="text-info font-weight-bold pl-3" for="resumen">Resumen</label>
        <textarea class="form-control" name="resumen" id="resumen" placeholder="Insertar el resumen del libro" rows="8"></textarea>
        <small id="autorError" class="form-text text-muted"></small>
    </div>
    <!-- <div>
        <img src="" alt="">
    </div> -->
    <div class="form-group">
        <label for="imagenLibro" class="text-info font-weight-bold pl-3">Imagen del libro</label>
        <input type="file" class="form-control-file" id="imagenLibro" name="userfile">
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-danger text-uppercase" href="<?= base_url(); ?>home"><i class="far fa-times-circle mr-3"></i>Cancelar</a>
        <button type="submit" class="btn btn-outline-success w-50 text-uppercase"><i class="far fa-check-circle mr-3"></i>Guardar datos</button>
    </div>

    </form>

</section>