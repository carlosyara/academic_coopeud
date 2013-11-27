<h1>Permisos List</h1>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($permisos as $permiso): ?>
    <tr>
      <td><?php echo $permiso->getNombre() ?></td>
      <td><a href="<?php echo url_for('permisos/edit?id='.$permiso->getId()) ?>">Editar</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('permisos/new') ?>">New</a>
