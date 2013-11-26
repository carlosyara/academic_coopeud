<?php

/**
 * permisos actions.
 *
 * @package    coopeud
 * @subpackage permisos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class permisosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->permisos = Doctrine_Core::getTable('permiso')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->permiso = Doctrine_Core::getTable('permiso')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->permiso);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new permisoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new permisoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($permiso = Doctrine_Core::getTable('permiso')->find(array($request->getParameter('id'))), sprintf('Object permiso does not exist (%s).', $request->getParameter('id')));
    $this->form = new permisoForm($permiso);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($permiso = Doctrine_Core::getTable('permiso')->find(array($request->getParameter('id'))), sprintf('Object permiso does not exist (%s).', $request->getParameter('id')));
    $this->form = new permisoForm($permiso);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($permiso = Doctrine_Core::getTable('permiso')->find(array($request->getParameter('id'))), sprintf('Object permiso does not exist (%s).', $request->getParameter('id')));
    $permiso->delete();

    $this->redirect('permisos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $permiso = $form->save();

      $this->redirect('permisos/edit?id='.$permiso->getId());
    }
  }
}
