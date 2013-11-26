<?php

/**
 * rol_permiso actions.
 *
 * @package    coopeud
 * @subpackage rol_permiso
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rol_permisoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rolpermisos = Doctrine_Core::getTable('rolpermiso')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rolpermiso = Doctrine_Core::getTable('rolpermiso')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rolpermiso);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new rolpermisoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new rolpermisoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rolpermiso = Doctrine_Core::getTable('rolpermiso')->find(array($request->getParameter('id'))), sprintf('Object rolpermiso does not exist (%s).', $request->getParameter('id')));
    $this->form = new rolpermisoForm($rolpermiso);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rolpermiso = Doctrine_Core::getTable('rolpermiso')->find(array($request->getParameter('id'))), sprintf('Object rolpermiso does not exist (%s).', $request->getParameter('id')));
    $this->form = new rolpermisoForm($rolpermiso);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rolpermiso = Doctrine_Core::getTable('rolpermiso')->find(array($request->getParameter('id'))), sprintf('Object rolpermiso does not exist (%s).', $request->getParameter('id')));
    $rolpermiso->delete();

    $this->redirect('rol_permiso/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rolpermiso = $form->save();

      $this->redirect('rol_permiso/edit?id='.$rolpermiso->getId());
    }
  }
}
