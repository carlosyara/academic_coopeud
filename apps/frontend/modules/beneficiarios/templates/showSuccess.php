<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $beneficiario->getId() ?></td>
    </tr>
    <tr>
      <th>Asociado:</th>
      <td><?php echo $beneficiario->getAsociadoId() ?></td>
    </tr>
    <tr>
      <th>Afiliado:</th>
      <td><?php echo $beneficiario->getAfiliadoId() ?></td>
    </tr>
    <tr>
      <th>Parentesco:</th>
      <td><?php echo $beneficiario->getParentesco() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('beneficiarios/edit?id='.$beneficiario->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('beneficiarios/index') ?>">List</a>
