
<form id="fvaluss" action="<?php echo url_for("login/validar")?>" method="post">
	<table width="100%" border="0" cellpadding="5px">
		<tr>
			<td width="25%"></td>
			<th align="left">USUARIO:</th>
			<td><input class="form-control" id="usuario" name="usuario" type="text" value="" />
			</td>
			<td width="25%"></td>
		</tr>
		<tr>
			<td width="25%"></td>
			<th>CONTRASE&Ntilde;A:</th>
			<td><input class="form-control" id="password" name="password" type="password" />
			</td>
			<td width="25%"></td>
		</tr>
		<tr>
			<td><input id="aes" name="aes" type="hidden" /></td>
		</tr>
		<tr>
			<td colspan="4" align="center"><center>
			<input class="btn btn-default " id="bAcceder" type="submit" value="Acceder" />
			</center></td>
		</tr>
	</table>
</form>
