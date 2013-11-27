<h1>Listado Personas</h1>
<h3>Seleccione la persona que agregara como <?php echo $create; ?>, si no existe
de clic el en el link "Crear Nueva Persona"
</h3>

<table>
  <thead>
    <tr>
      <th>Documento</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha nacimiento</th>
      <th>Crear</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $persona): ?>
    <tr>
      <td><?php echo $persona->getDocumento() ?></td>
      <td><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getApellido() ?></td>
      <td><?php echo $persona->getFechaNacimiento() ?></td>
      <td><a href="<?php echo url_for('afiliados/new?persona_id='.$persona->getId().'&create='.$create) ?>">Crear</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('personas/new?create='.$create) ?>">Crear Nueva Persona</a>
