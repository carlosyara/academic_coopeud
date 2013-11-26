<h1>Rolpermisos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Rol</th>
      <th>Permiso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rolpermisos as $rolpermiso): ?>
    <tr>
      <td><a href="<?php echo url_for('rol_permiso/show?id='.$rolpermiso->getId()) ?>"><?php echo $rolpermiso->getId() ?></a></td>
      <td><?php echo $rolpermiso->getRolId() ?></td>
      <td><?php echo $rolpermiso->getPermisoId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('rol_permiso/new') ?>">New</a>
