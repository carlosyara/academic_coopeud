<h1>Rolpermisos List</h1>

<table>
  <thead>
    <tr>
      <th>Rol</th>
      <th>Permiso</th>
      <th>Ver</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rolpermisos as $rolpermiso): ?>
    <tr>
      <td><?php echo $rolpermiso->getRol() ?></td>
      <td><?php echo $rolpermiso->getPermiso() ?></td>
      <td><a href="<?php echo url_for('rol_permiso/show?id='.$rolpermiso->getId()) ?>">Ver</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('rol_permiso/new') ?>">New</a>
