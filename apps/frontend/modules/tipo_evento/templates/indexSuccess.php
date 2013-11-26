<h1>Tipoeventos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipoeventos as $tipoevento): ?>
    <tr>
      <td><a href="<?php echo url_for('tipo_evento/show?id='.$tipoevento->getId()) ?>"><?php echo $tipoevento->getId() ?></a></td>
      <td><?php echo $tipoevento->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipo_evento/new') ?>">New</a>
