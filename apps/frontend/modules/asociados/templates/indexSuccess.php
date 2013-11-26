<h1>Asociados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Afiliado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($asociados as $asociado): ?>
    <tr>
      <td><a href="<?php echo url_for('asociados/show?id='.$asociado->getId()) ?>"><?php echo $asociado->getId() ?></a></td>
      <td><?php echo $asociado->getAfiliadoId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('asociados/new') ?>">New</a>
