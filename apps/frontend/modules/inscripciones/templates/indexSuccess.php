<h1>Inscripcions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Evento</th>
      <th>Asociado</th>
      <th>Fecha inscripcion</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($inscripcions as $inscripcion): ?>
    <tr>
      <td><a href="<?php echo url_for('inscripciones/show?id='.$inscripcion->getId()) ?>"><?php echo $inscripcion->getId() ?></a></td>
      <td><?php echo $inscripcion->getEventoId() ?></td>
      <td><?php echo $inscripcion->getAsociadoId() ?></td>
      <td><?php echo $inscripcion->getFechaInscripcion() ?></td>
      <td><?php echo $inscripcion->getEstado() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('inscripciones/new') ?>">New</a>
