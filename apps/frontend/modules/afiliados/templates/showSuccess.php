<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $afiliado->getId() ?></td>
    </tr>
    <tr>
      <th>Persona:</th>
      <td><?php echo $afiliado->getPersonaId() ?></td>
    </tr>
    <tr>
      <th>Fecha afiliacion:</th>
      <td><?php echo $afiliado->getFechaAfiliacion() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $afiliado->getTipo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('afiliados/edit?id='.$afiliado->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('afiliados/index') ?>">List</a>
