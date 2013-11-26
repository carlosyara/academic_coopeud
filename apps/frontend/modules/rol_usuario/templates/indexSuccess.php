<h1>Rolusuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Usuario</th>
      <th>Rol</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rolusuarios as $rolusuario): ?>
    <tr>
      <td><a href="<?php echo url_for('rol_usuario/show?id='.$rolusuario->getId()) ?>"><?php echo $rolusuario->getId() ?></a></td>
      <td><?php echo $rolusuario->getUsuarioId() ?></td>
      <td><?php echo $rolusuario->getRolId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('rol_usuario/new') ?>">New</a>
