<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $persona->getId() ?></td>
    </tr>
    <tr>
      <th>Documento:</th>
      <td><?php echo $persona->getDocumento() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $persona->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $persona->getApellido() ?></td>
    </tr>
    <tr>
      <th>Fecha nacimiento:</th>
      <td><?php echo $persona->getFechaNacimiento() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('personas/edit?id='.$persona->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('personas/index') ?>">List</a>
