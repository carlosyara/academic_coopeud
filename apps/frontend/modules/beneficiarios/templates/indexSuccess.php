<h1>Beneficiarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Asociado</th>
      <th>Afiliado</th>
      <th>Parentesco</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($beneficiarios as $beneficiario): ?>
    <tr>
      <td><a href="<?php echo url_for('beneficiarios/show?id='.$beneficiario->getId()) ?>"><?php echo $beneficiario->getId() ?></a></td>
      <td><?php echo $beneficiario->getAsociadoId() ?></td>
      <td><?php echo $beneficiario->getAfiliadoId() ?></td>
      <td><?php echo $beneficiario->getParentesco() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('beneficiarios/new') ?>">New</a>
