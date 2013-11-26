<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $asociado->getId() ?></td>
    </tr>
    <tr>
      <th>Afiliado:</th>
      <td><?php echo $asociado->getAfiliadoId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('asociados/edit?id='.$asociado->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('asociados/index') ?>">List</a>
