<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $pagoinscripcion->getId() ?></td>
    </tr>
    <tr>
      <th>Inscripcion:</th>
      <td><?php echo $pagoinscripcion->getInscripcionId() ?></td>
    </tr>
    <tr>
      <th>Cuotas:</th>
      <td><?php echo $pagoinscripcion->getCuotas() ?></td>
    </tr>
    <tr>
      <th>Total:</th>
      <td><?php echo $pagoinscripcion->getTotal() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $pagoinscripcion->getEstado() ?></td>
    </tr>
    <tr>
      <th>Fecha pago:</th>
      <td><?php echo $pagoinscripcion->getFechaPago() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('pago_inscripcion/edit?id='.$pagoinscripcion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('pago_inscripcion/index') ?>">List</a>
