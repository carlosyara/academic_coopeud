<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $proveedor->getId() ?></td>
    </tr>
    <tr>
      <th>Razon social:</th>
      <td><?php echo $proveedor->getRazonSocial() ?></td>
    </tr>
    <tr>
      <th>Nit:</th>
      <td><?php echo $proveedor->getNit() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('proveedores/edit?id='.$proveedor->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('proveedores/index') ?>">List</a>
