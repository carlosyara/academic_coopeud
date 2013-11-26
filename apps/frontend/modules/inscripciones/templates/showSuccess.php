<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $inscripcion->getId() ?></td>
    </tr>
    <tr>
      <th>Evento:</th>
      <td><?php echo $inscripcion->getEventoId() ?></td>
    </tr>
    <tr>
      <th>Asociado:</th>
      <td><?php echo $inscripcion->getAsociadoId() ?></td>
    </tr>
    <tr>
      <th>Fecha inscripcion:</th>
      <td><?php echo $inscripcion->getFechaInscripcion() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $inscripcion->getEstado() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('inscripciones/edit?id='.$inscripcion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('inscripciones/index') ?>">List</a>
