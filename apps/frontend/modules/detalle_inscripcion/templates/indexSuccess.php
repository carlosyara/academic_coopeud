<h1>Detalleinscripcions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Inscripcion</th>
      <th>Persona</th>
      <th>Coopago</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($detalleinscripcions as $detalleinscripcion): ?>
    <tr>
      <td><a href="<?php echo url_for('detalle_inscripcion/show?id='.$detalleinscripcion->getId()) ?>"><?php echo $detalleinscripcion->getId() ?></a></td>
      <td><?php echo $detalleinscripcion->getInscripcionId() ?></td>
      <td><?php echo $detalleinscripcion->getPersonaId() ?></td>
      <td><?php echo $detalleinscripcion->getCoopago() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('detalle_inscripcion/new') ?>">New</a>
