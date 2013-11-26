<h1>Proveedors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Razon social</th>
      <th>Nit</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($proveedors as $proveedor): ?>
    <tr>
      <td><a href="<?php echo url_for('proveedores/show?id='.$proveedor->getId()) ?>"><?php echo $proveedor->getId() ?></a></td>
      <td><?php echo $proveedor->getRazonSocial() ?></td>
      <td><?php echo $proveedor->getNit() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('proveedores/new') ?>">New</a>
