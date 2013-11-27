<?php

/**
 * afiliados actions.
 *
 * @package    coopeud
 * @subpackage afiliados
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class afiliadosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->afiliados = Doctrine_Core::getTable('afiliado')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->afiliado = Doctrine_Core::getTable('afiliado')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->afiliado);
  }

  public function executeNew(sfWebRequest $request)
  {
  	if($this->getUser()->hasCredential('TODOS') || $this->getUser()->hasCredential('CREAR ASOCIADOS') || $this->getUser()->hasCredential('CREAR BENEFICIARIOS')){
	  	$id_persona = $request->getParameter('persona_id');
	  	$create		= $request->getParameter('create');
	  	if(!empty($id_persona) && !empty($create)){
	    	$this->form = new afiliadoForm();
	  	}else{
	  		$this->redirect('login/authenticated');
	  	}
  	}
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new afiliadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($afiliado = Doctrine_Core::getTable('afiliado')->find(array($request->getParameter('id'))), sprintf('Object afiliado does not exist (%s).', $request->getParameter('id')));
    $this->form = new afiliadoForm($afiliado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($afiliado = Doctrine_Core::getTable('afiliado')->find(array($request->getParameter('id'))), sprintf('Object afiliado does not exist (%s).', $request->getParameter('id')));
    $this->form = new afiliadoForm($afiliado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($afiliado = Doctrine_Core::getTable('afiliado')->find(array($request->getParameter('id'))), sprintf('Object afiliado does not exist (%s).', $request->getParameter('id')));
    $afiliado->delete();

    $this->redirect('afiliados/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $afiliado = $form->save();

      $this->redirect('afiliados/edit?id='.$afiliado->getId());
    }
  }
}
