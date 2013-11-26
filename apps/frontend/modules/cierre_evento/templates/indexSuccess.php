<h1>Eventocierres List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Evento</th>
      <th>Total recaudo</th>
      <th>Diferencia</th>
      <th>Total asistentes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eventocierres as $eventocierre): ?>
    <tr>
      <td><a href="<?php echo url_for('cierre_evento/show?id='.$eventocierre->getId()) ?>"><?php echo $eventocierre->getId() ?></a></td>
      <td><?php echo $eventocierre->getEventoId() ?></td>
      <td><?php echo $eventocierre->getTotalRecaudo() ?></td>
      <td><?php echo $eventocierre->getDiferencia() ?></td>
      <td><?php echo $eventocierre->getTotalAsistentes() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('cierre_evento/new') ?>">New</a>
