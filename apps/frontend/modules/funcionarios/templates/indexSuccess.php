<h1>Funcionarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Fecha ingreso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($funcionarios as $funcionario): ?>
    <tr>
      <td><a href="<?php echo url_for('funcionarios/show?id='.$funcionario->getId()) ?>"><?php echo $funcionario->getId() ?></a></td>
      <td><?php echo $funcionario->getPersonaId() ?></td>
      <td><?php echo $funcionario->getFechaIngreso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('funcionarios/new') ?>">New</a>
