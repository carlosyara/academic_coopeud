<h1>Personas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Documento</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha nacimiento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $persona): ?>
    <tr>
      <td><a href="<?php echo url_for('personas/show?id='.$persona->getId()) ?>"><?php echo $persona->getId() ?></a></td>
      <td><?php echo $persona->getDocumento() ?></td>
      <td><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getApellido() ?></td>
      <td><?php echo $persona->getFechaNacimiento() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('personas/new') ?>">New</a>
