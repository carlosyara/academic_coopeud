<h1>Rols List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rols as $rol): ?>
    <tr>
      <td><a href="<?php echo url_for('roles/show?id='.$rol->getId()) ?>"><?php echo $rol->getId() ?></a></td>
      <td><?php echo $rol->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('roles/new') ?>">New</a>
