<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $usuario->getId() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $usuario->getPassword() ?></td>
    </tr>
    <tr>
      <th>Nickname:</th>
      <td><?php echo $usuario->getNickname() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $usuario->getPersonaId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuarios/edit?id='.$usuario->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usuarios/index') ?>">List</a>
