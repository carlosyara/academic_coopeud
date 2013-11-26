<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $detalleinscripcion->getId() ?></td>
    </tr>
    <tr>
      <th>Inscripcion:</th>
      <td><?php echo $detalleinscripcion->getInscripcionId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $detalleinscripcion->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Coopago:</th>
      <td><?php echo $detalleinscripcion->getCoopago() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('detalle_inscripcion/edit?id='.$detalleinscripcion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('detalle_inscripcion/index') ?>">List</a>
