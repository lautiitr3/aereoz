<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("estilo.css")?>"> <!-- Enlaza tu archivo de estilos CSS -->
    <link rel="icon" href="<?php echo base_url("/image/logoo.png") ?>" type="image/x-icon">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <img src="<?php echo base_url("/image/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href></a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    <h1>Subir Vuelos</h1>
    <form method="post" action="<?= base_url('VueloController/subirvuelos'); ?>" enctype="multipart/form-data">
        <label for="flight_name">Nombre del vuelo:</label>
        <input type="text" name="flight_name" required><br>

        <label for="flight_date">Fecha del vuelo:</label>
        <input type="date" name="flight_date" required><br>

        <label for="flight_file">Archivo del vuelo:</label>
        <input type="file" name="flight_file" required><br>

        <button type="submit">Subir Vuelo</button>
    </form>
    <h1>Editar Personas</h1>
    <form method="post" id="update" name="update" action="<?php echo base_url('update') ?>"">
      <input type="hidden" name="id" id="id" value="<?php echo $persona['id']; ?>">
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $persona['nombre']; ?>">
      </div>
      <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" class="form-control" value="<?php echo $persona['apellido']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Guardar</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          nombre: {
            required: true,
          },
          apellido: {
            required: true,
          },
        },
        messages: {
          nombre: {
            required: "Se requiere ingreso de nombre.",
          },
          apellido: {
            required: "Se requiere ingreso de apellido.",
           
          },
        },
      })
    }
  </script>
    <h1>Actualizar Personas</h1>
    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('persona_form') ?>" class="btn btn-success mb-2">Nuevo registro</a>
	</div>
    <table>
    <tbody>
         <?php foreach($per as $perso): ?>
          <tr>
             <td><?php echo $perso['id']; ?></td>
             <td><?php echo $perso['nombre']; ?></td>
             <td><?php echo $perso['apellido']; ?></td>
             <td>
              <a href="<?php echo base_url('edit_view/'.$perso['id']);?>" class="btn btn-primary btn-sm">Editar</a>
              <a href="<?php echo base_url('delete/'.$perso['id']);?>" class="btn btn-danger btn-sm">Eliminar</a>
              </td>
          </tr>
         <?php endforeach; ?>
        
       </tbody>
    </table>