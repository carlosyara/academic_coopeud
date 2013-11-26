<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rolpermiso->getId() ?></td>
    </tr>
    <tr>
      <th>Rol:</th>
      <td><?php echo $rolpermiso->getRolId() ?></td>
    </tr>
    <tr>
      <th>Permiso:</th>
      <td><?php echo $rolpermiso->getPermisoId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('rol_permiso/edit?id='.$rolpermiso->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('rol_permiso/index') ?>">List</a>
