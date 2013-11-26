<?php

/**
 * rol_usuario actions.
 *
 * @package    coopeud
 * @subpackage rol_usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rol_usuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rolusuarios = Doctrine_Core::getTable('rolusuario')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->rolusuario = Doctrine_Core::getTable('rolusuario')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->rolusuario);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new rolusuarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new rolusuarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rolusuario = Doctrine_Core::getTable('rolusuario')->find(array($request->getParameter('id'))), sprintf('Object rolusuario does not exist (%s).', $request->getParameter('id')));
    $this->form = new rolusuarioForm($rolusuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rolusuario = Doctrine_Core::getTable('rolusuario')->find(array($request->getParameter('id'))), sprintf('Object rolusuario does not exist (%s).', $request->getParameter('id')));
    $this->form = new rolusuarioForm($rolusuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rolusuario = Doctrine_Core::getTable('rolusuario')->find(array($request->getParameter('id'))), sprintf('Object rolusuario does not exist (%s).', $request->getParameter('id')));
    $rolusuario->delete();

    $this->redirect('rol_usuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rolusuario = $form->save();

      $this->redirect('rol_usuario/edit?id='.$rolusuario->getId());
    }
  }
}
