<h1>Escoja El Rol Para Ingresar en el sistema</h1>
<table>
  <thead>
    <tr>
      <th>Rol</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($roles as $rol): ?>
    <tr>
      <td><a href="<?php echo url_for('login/asignar_rol?IdRol='.$rol->getRolId()) ?>"><?php echo $rol->getRol()->getNombre(); ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>