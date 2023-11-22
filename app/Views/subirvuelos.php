
    <h2>Subir Vuelo</h2>
    <form method="post" action="<?= base_url('VuelosController/subirvuelos'); ?>" enctype="multipart/form-data">
    <label for="destino">Destino</label>
    <input type="text" name="destino" id="destino">
    <label for="origen">Origen</label>
    <input type="text" name="origen" id="origen">
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">
    <label for="fecha">Fechas Disponibles</label>
    <input type="date" name="fecha" id="fecha">
    <label for="imagen">Archivo del vuelo:</label>
    <input type="file" name="imagen" id="imagen" required><br>
    <input type="submit" value="Subir Vuelo">
    </form>
</body>
</html>