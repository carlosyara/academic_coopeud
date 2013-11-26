<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $rol->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $rol->getNombre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('roles/edit?id='.$rol->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('roles/index') ?>">List</a>
