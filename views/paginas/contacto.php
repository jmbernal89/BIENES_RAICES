<main class="contenedor seccion">
    <h1>Contacto</h1>

    <?php if ($mensaje) { ?>
        <p class="alerta exito"><?php echo $mensaje ?> </p>;
    <?php } ?>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="destacada">
    </picture>
    <h2>Llene el formulario de Contacto</h2>
    <form action="/contacto" class="formulario" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="contacto[nombre]" id="nombre" placeholder="Tu nombre" required>

            <label for=" mensaje">Mensaje</label>
            <textarea name="contacto[mensaje]" id="mensaje" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select name="contacto[tipo]" id="opciones" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" id="presupuesto" name="contacto[precio]" required />
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Cómo desea ser contactado</p>
            <div class=" forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" name="contacto[contacto]" value="telefono" id="contactar-telefono" required>

                <label for="contactar-email">E-mail</label>
                <input type="radio" name="contacto[contacto]" value="email" id="contactar-email" required>
            </div>

            <div id="contacto"></div>


        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>