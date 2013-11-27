<?php

/**
 * login actions.
 *
 * @package    coopeud
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   	$this->getUser()->setAttribute('NombreUsuario','');
	$this->getUser()->setAttribute('IdUsuario',  '');
	$this->getUser()->setAttribute('IdRol',  '');
	$this->getUser()->setAuthenticated(false);
	$this->getUser()->clearCredentials();
  }
  public function executeValidar(sfWebRequest $request)
  {
  	$nick 	= $request->getParameter('usuario');
  	$pass 	= $request->getParameter('password');
  	/* Se consulta el usuario por nickname*/
  	$usuarios 	= Doctrine::getTable('usuario')
  	->createQuery('u')
  	->select('u.password AS password, u.id AS id')
  	->where('u.nickname = "'.$nick.'"')
  	->execute();
  	
  	$ussId		= null;
  	$password 	= null;
  	foreach ($usuarios as $usuario) {
  		$password 	= $usuario->getPassword();
  		$ussId		= $usuario->getId();
  	}
  	if (!empty($ussId)){
  		if (md5($pass) == $password){
  			$this->getUser()->setAuthenticated(true);
  			$this->getUser()->setAttribute('NombreUsuario', $nick);
			$this->getUser()->setAttribute('IdUsuario',  $ussId);
			$this->getUser()->setAttribute('MensajeUsuario',  '');	
			$this->redirect('login/select_rol');
  		} else {
  			$this->redirect('login/index');
  		}
  	}else{
  		$this->redirect('login/index');
  	}
  }
  public function executeSelect_rol(sfWebRequest $request){
  	$this->getUser()->setAttribute('IdRol',  '');
  	$ussId = $this->getUser()->getAttribute('IdUsuario');
  	$this->roles = Doctrine::getTable('RolUsuario')
  	->findBy('usuario_id',$ussId );
  }
  public function executeAsignar_rol(sfWebRequest $request){
  	$this->getUser()->clearCredentials();
  	$rolId = $request->getParameter('IdRol');
  	$this->return = false;
  	if(!empty($rolId)){
	  	$ussId = $this->getUser()->getAttribute('IdUsuario');
	  	$roles = Doctrine::getTable('RolUsuario')
	  	->findBy('usuario_id',$ussId );
	  	$rolesUsuario = array();
	  	foreach ($roles AS $rol){
	  		$rolesUsuario[] = $rol->getRolId();
	  	}
	  	if(in_array($rolId, $rolesUsuario)){
	  		$this->getUser()->setAttribute('IdRol',  $rolId);
	  		$permisos = Doctrine::getTable('RolPermiso')
	  		->findBy('rol_id', $rolId);
	  		foreach ($permisos as $perm){
	  			$credencial= $perm->getPermiso();
				$this->getUser()->addCredential($credencial);
	  		}
	  		$this->return = true;
	  	}
  	}
  }
  public function executeAuthenticated(sfWebRequest $request){
  	
  }
}
