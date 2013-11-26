<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $evento->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $evento->getNombre() ?></td>
    </tr>
    <tr>
      <th>Valor total:</th>
      <td><?php echo $evento->getValorTotal() ?></td>
    </tr>
    <tr>
      <th>Proveedor:</th>
      <td><?php echo $evento->getProveedorId() ?></td>
    </tr>
    <tr>
      <th>Tipo-evento:</th>
      <td><?php echo $evento->getTipoEventoId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $evento->getEstado() ?></td>
    </tr>
    <tr>
      <th>Con copago:</th>
      <td><?php echo $evento->getConCopago() ?></td>
    </tr>
    <tr>
      <th>Numero asistentes:</th>
      <td><?php echo $evento->getNumeroAsistentes() ?></td>
    </tr>
    <tr>
      <th>Cupo disponible:</th>
      <td><?php echo $evento->getCupoDisponible() ?></td>
    </tr>
    <tr>
      <th>Subisidio copago:</th>
      <td><?php echo $evento->getSubisidioCopago() ?></td>
    </tr>
    <tr>
      <th>Lugar:</th>
      <td><?php echo $evento->getLugar() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $evento->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $evento->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Fecha max inscripcion:</th>
      <td><?php echo $evento->getFechaMaxInscripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha max cancelacion:</th>
      <td><?php echo $evento->getFechaMaxCancelacion() ?></td>
    </tr>
    <tr>
      <th>Observaciones:</th>
      <td><?php echo $evento->getObservaciones() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('eventos/edit?id='.$evento->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('eventos/index') ?>">List</a>
