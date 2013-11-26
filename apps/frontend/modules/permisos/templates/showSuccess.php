<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $permiso->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $permiso->getNombre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('permisos/edit?id='.$permiso->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('permisos/index') ?>">List</a>
