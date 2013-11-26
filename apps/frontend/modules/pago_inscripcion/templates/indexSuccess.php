<h1>Pagoinscripcions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Inscripcion</th>
      <th>Cuotas</th>
      <th>Total</th>
      <th>Estado</th>
      <th>Fecha pago</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pagoinscripcions as $pagoinscripcion): ?>
    <tr>
      <td><a href="<?php echo url_for('pago_inscripcion/show?id='.$pagoinscripcion->getId()) ?>"><?php echo $pagoinscripcion->getId() ?></a></td>
      <td><?php echo $pagoinscripcion->getInscripcionId() ?></td>
      <td><?php echo $pagoinscripcion->getCuotas() ?></td>
      <td><?php echo $pagoinscripcion->getTotal() ?></td>
      <td><?php echo $pagoinscripcion->getEstado() ?></td>
      <td><?php echo $pagoinscripcion->getFechaPago() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pago_inscripcion/new') ?>">New</a>
