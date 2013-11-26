<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $eventocierre->getId() ?></td>
    </tr>
    <tr>
      <th>Evento:</th>
      <td><?php echo $eventocierre->getEventoId() ?></td>
    </tr>
    <tr>
      <th>Total recaudo:</th>
      <td><?php echo $eventocierre->getTotalRecaudo() ?></td>
    </tr>
    <tr>
      <th>Diferencia:</th>
      <td><?php echo $eventocierre->getDiferencia() ?></td>
    </tr>
    <tr>
      <th>Total asistentes:</th>
      <td><?php echo $eventocierre->getTotalAsistentes() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('cierre_evento/edit?id='.$eventocierre->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cierre_evento/index') ?>">List</a>
