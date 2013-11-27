<?php

/**
 * personas actions.
 *
 * @package    coopeud
 * @subpackage personas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class personasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->personas = Doctrine_Core::getTable('persona')
      ->createQuery('a')
      ->execute();
  }
public function executeList_create(sfWebRequest $request)
  {
  	if($this->getUser()->hasCredential('TODOS') || $this->getUser()->hasCredential('CREAR ASOCIADOS') || $this->getUser()->hasCredential('CREAR BENEFICIARIOS') || $this->getUser()->hasCredential('CREAR FUNCIONARIOS')){
	  	$this->create	= $request->getParameter('create');
	    $this->personas = Doctrine_Core::getTable('persona')
	      ->createQuery('a')
	      ->execute();
  	} else {
  		 $this->redirect('login/authenticated');
  	}
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->persona = Doctrine_Core::getTable('persona')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->persona);
  }

  public function executeNew(sfWebRequest $request)
  {
  	$this->create = $request->getParameter('create');
    $this->form = new personaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new personaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
  	$this->create = null;
    $this->forward404Unless($persona = Doctrine_Core::getTable('persona')->find(array($request->getParameter('id'))), sprintf('Object persona does not exist (%s).', $request->getParameter('id')));
    $this->form = new personaForm($persona);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($persona = Doctrine_Core::getTable('persona')->find(array($request->getParameter('id'))), sprintf('Object persona does not exist (%s).', $request->getParameter('id')));
    $this->form = new personaForm($persona);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($persona = Doctrine_Core::getTable('persona')->find(array($request->getParameter('id'))), sprintf('Object persona does not exist (%s).', $request->getParameter('id')));
    $persona->delete();

    $this->redirect('personas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $persona = $form->save();
      $create = $request->getParameter('create');
      if($create == 'asociado' || $create == 'beneficiario' ){
      	$this->redirect('afiliados/new?persona_id='.$persona->getId().'&create='.$create);
      }
      $this->redirect('personas/edit?id='.$persona->getId());
    }
  }
}
