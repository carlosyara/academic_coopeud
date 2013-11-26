<h1>Afiliados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Fecha afiliacion</th>
      <th>Tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($afiliados as $afiliado): ?>
    <tr>
      <td><a href="<?php echo url_for('afiliados/show?id='.$afiliado->getId()) ?>"><?php echo $afiliado->getId() ?></a></td>
      <td><?php echo $afiliado->getPersonaId() ?></td>
      <td><?php echo $afiliado->getFechaAfiliacion() ?></td>
      <td><?php echo $afiliado->getTipo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('afiliados/new') ?>">New</a>
