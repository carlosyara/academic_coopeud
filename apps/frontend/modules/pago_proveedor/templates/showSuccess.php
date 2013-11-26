<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $pagoproveedor->getId() ?></td>
    </tr>
    <tr>
      <th>Evento:</th>
      <td><?php echo $pagoproveedor->getEventoId() ?></td>
    </tr>
    <tr>
      <th>Fecha pago:</th>
      <td><?php echo $pagoproveedor->getFechaPago() ?></td>
    </tr>
    <tr>
      <th>Proveedor:</th>
      <td><?php echo $pagoproveedor->getProveedorId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('pago_proveedor/edit?id='.$pagoproveedor->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('pago_proveedor/index') ?>">List</a>
