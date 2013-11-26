<?php

/**
 * roles actions.
 *
 * @package    coopeud
 * @subpackage roles
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rolesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rols = Doctrine_Core::getTable('rol')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rol = Doctrine_Core::getTable('rol')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rol);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new rolForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new rolForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rol = Doctrine_Core::getTable('rol')->find(array($request->getParameter('id'))), sprintf('Object rol does not exist (%s).', $request->getParameter('id')));
    $this->form = new rolForm($rol);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rol = Doctrine_Core::getTable('rol')->find(array($request->getParameter('id'))), sprintf('Object rol does not exist (%s).', $request->getParameter('id')));
    $this->form = new rolForm($rol);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rol = Doctrine_Core::getTable('rol')->find(array($request->getParameter('id'))), sprintf('Object rol does not exist (%s).', $request->getParameter('id')));
    $rol->delete();

    $this->redirect('roles/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rol = $form->save();

      $this->redirect('roles/edit?id='.$rol->getId());
    }
  }
}
