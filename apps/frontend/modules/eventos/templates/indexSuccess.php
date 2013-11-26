<h1>Eventos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Valor total</th>
      <th>Proveedor</th>
      <th>Tipo-evento</th>
      <th>Estado</th>
      <th>Con copago</th>
      <th>Numero asistentes</th>
      <th>Cupo disponible</th>
      <th>Subisidio copago</th>
      <th>Lugar</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
      <th>Fecha max inscripcion</th>
      <th>Fecha max cancelacion</th>
      <th>Observaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eventos as $evento): ?>
    <tr>
      <td><a href="<?php echo url_for('eventos/show?id='.$evento->getId()) ?>"><?php echo $evento->getId() ?></a></td>
      <td><?php echo $evento->getNombre() ?></td>
      <td><?php echo $evento->getValorTotal() ?></td>
      <td><?php echo $evento->getProveedorId() ?></td>
      <td><?php echo $evento->getTipoEventoId() ?></td>
      <td><?php echo $evento->getEstado() ?></td>
      <td><?php echo $evento->getConCopago() ?></td>
      <td><?php echo $evento->getNumeroAsistentes() ?></td>
      <td><?php echo $evento->getCupoDisponible() ?></td>
      <td><?php echo $evento->getSubisidioCopago() ?></td>
      <td><?php echo $evento->getLugar() ?></td>
      <td><?php echo $evento->getFechaInicio() ?></td>
      <td><?php echo $evento->getFechaFin() ?></td>
      <td><?php echo $evento->getFechaMaxInscripcion() ?></td>
      <td><?php echo $evento->getFechaMaxCancelacion() ?></td>
      <td><?php echo $evento->getObservaciones() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('eventos/new') ?>">New</a>
