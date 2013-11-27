<h1>Asociados List</h1>

<table>
  <thead>
    <tr>
      <th>Ver</th>
      <th>Afiliado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($asociados as $asociado): ?>
    <tr>
      <td><a href="<?php echo url_for('asociados/show?id='.$asociado->getId()) ?>">Ver</a></td>
      <td><?php echo $asociado->getAfiliadoId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php if ($sf_user->hasCredential('CREAR ASOCIADOS')||$sf_user->hasCredential('TODOS')): ?>
  <a href="<?php echo url_for('personas/list_create?create=asociado') ?>">Nuevo Asociado</a>
<?php endif;?>  
