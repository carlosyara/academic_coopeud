<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rolusuario->getId() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $rolusuario->getUsuarioId() ?></td>
    </tr>
    <tr>
      <th>Rol:</th>
      <td><?php echo $rolusuario->getRolId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('rol_usuario/edit?id='.$rolusuario->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('rol_usuario/index') ?>">List</a>
