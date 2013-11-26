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
  		} else {
  			$this->redirect('login/index');
  		}
  	}else{
  		$this->redirect('login/index');
  	}
  }
  public function asignar_rol(sfWebRequest $request){
  	$ussId = $this->getUser()->getAttribute('idUsuario');
  	
  }
}
