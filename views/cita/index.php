<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos:</p>

<?php  
    include_once __DIR__ . '/../templates/barra.php';
?>

<div id="app">
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuacion</p>
        <div id="servicios" class="listado-servicios">

        </div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" value="<?php echo $nombre;?>" disabled>
            </div>
            <div class="campo">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" min="<?php echo Date('Y-m-d'); ?>">
            </div>
            <!-- <div class="campo">
                <label for="hora">Hora</label>
                <input type="time" id="hora" name="horadeseada" list="listahorasdeseadas">
            </div> -->
            <div class="campo">
                <label for="hora">Hora</label>
                <select name="select" id="hora">
                    <option selected disabled>Horarios Disponibles
                    <option value="08:00:00">08:00
                    <option value="08:30:00">08:30
                    <option value="09:00:00">09:00
                    <option value="09:30:00">09:30
                    <option value="10:00:00">10:00
                    <option value="10:30:00">10:30
                    <option value="11:00:00">11:00
                    <option value="11:30:00">11:30
                    <option value="12:00:00">12:00
                    <option value="12:30:00">12:30
                    <option value="13:00:00">13:00
                    <option value="15:00:00">15:00
                    <option value="15:30:00">15:30
                    <option value="16:00:00">16:00
                    <option value="16:30:00">16:30
                    <option value="17:00:00">17:00
                    <option value="17:30:00">17:30
                </select>
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>

    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la informacion sea correcta</p>
    </div>

    <div class="paginacion">
        <button type="button" id="anterior" class="boton">&laquo; Anterior</button>
        <button type="button" id="siguiente" class="boton">Siguiente &raquo;</button>
    </div>
</div>

<?php 
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?>