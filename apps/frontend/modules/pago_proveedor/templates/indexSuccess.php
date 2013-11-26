<h1>Pagoproveedors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Evento</th>
      <th>Fecha pago</th>
      <th>Proveedor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pagoproveedors as $pagoproveedor): ?>
    <tr>
      <td><a href="<?php echo url_for('pago_proveedor/show?id='.$pagoproveedor->getId()) ?>"><?php echo $pagoproveedor->getId() ?></a></td>
      <td><?php echo $pagoproveedor->getEventoId() ?></td>
      <td><?php echo $pagoproveedor->getFechaPago() ?></td>
      <td><?php echo $pagoproveedor->getProveedorId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pago_proveedor/new') ?>">New</a>
