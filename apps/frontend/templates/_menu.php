<ul class="nav navbar-nav">
	<li><a href="/">INICIO</a>
	</li>
	<li><a href="#">EVENTOS</a>
		<ul>
			<?php //if ($sf_user->hasCredential('RADICACION')||$sf_user->hasCredential('TODOS')): ?>
			<li><a href="<?php echo url_for('configuracion_radicacion/index') ?>">Radicaci&oacute;n</a>
			</li>
			<?php //endif;?>
		</ul>
	</li>
	<li><a href="#">PROVEEDORES</a>
		<ul>
			<?php //if ($sf_user->hasCredential('RADICACION')||$sf_user->hasCredential('TODOS')): ?>
			<li><a href="<?php echo url_for('configuracion_radicacion/index') ?>">Radicaci&oacute;n</a>
			</li>
			<?php //endif;?>
		</ul>
	</li>
	<li><a href="#">INSCRIPCIONES</a>
		<ul>
			<?php //if ($sf_user->hasCredential('RADICACION')||$sf_user->hasCredential('TODOS')): ?>
			<li><a href="<?php echo url_for('configuracion_radicacion/index') ?>">Radicaci&oacute;n</a>
			</li>
			<?php //endif;?>
		</ul>
	</li>
	<?php if ($sf_user->hasCredential('VER ASOCIADOS')||$sf_user->hasCredential('TODOS')): ?>
	<li><a href="/asociados/index">ASOCIADOS</a>
	</li>
	<?php endif;?>
	<li><a href="#">USUARIOS</a>
		<ul>
			<?php //if ($sf_user->hasCredential('RADICACION')||$sf_user->hasCredential('TODOS')): ?>
			<li><a href="<?php echo url_for('configuracion_radicacion/index') ?>">Radicaci&oacute;n</a>
			</li>
			<?php //endif;?>
		</ul>
	</li>
	
</ul>
