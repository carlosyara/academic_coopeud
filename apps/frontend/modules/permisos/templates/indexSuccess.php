<h1>Permisos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($permisos as $permiso): ?>
    <tr>
      <td><a href="<?php echo url_for('permisos/show?id='.$permiso->getId()) ?>"><?php echo $permiso->getId() ?></a></td>
      <td><?php echo $permiso->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('permisos/new') ?>">New</a>
