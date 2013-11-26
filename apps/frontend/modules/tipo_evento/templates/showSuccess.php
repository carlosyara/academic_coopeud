<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $tipoevento->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $tipoevento->getNombre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipo_evento/edit?id='.$tipoevento->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipo_evento/index') ?>">List</a>
