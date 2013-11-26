<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $funcionario->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $funcionario->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Fecha ingreso:</th>
      <td><?php echo $funcionario->getFechaIngreso() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('funcionarios/edit?id='.$funcionario->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('funcionarios/index') ?>">List</a>
