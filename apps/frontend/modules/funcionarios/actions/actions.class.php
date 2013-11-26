<?php

/**
 * funcionarios actions.
 *
 * @package    coopeud
 * @subpackage funcionarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class funcionariosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->funcionarios = Doctrine_Core::getTable('funcionario')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->funcionario = Doctrine_Core::getTable('funcionario')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->funcionario);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new funcionarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new funcionarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($funcionario = Doctrine_Core::getTable('funcionario')->find(array($request->getParameter('id'))), sprintf('Object funcionario does not exist (%s).', $request->getParameter('id')));
    $this->form = new funcionarioForm($funcionario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($funcionario = Doctrine_Core::getTable('funcionario')->find(array($request->getParameter('id'))), sprintf('Object funcionario does not exist (%s).', $request->getParameter('id')));
    $this->form = new funcionarioForm($funcionario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($funcionario = Doctrine_Core::getTable('funcionario')->find(array($request->getParameter('id'))), sprintf('Object funcionario does not exist (%s).', $request->getParameter('id')));
    $funcionario->delete();

    $this->redirect('funcionarios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $funcionario = $form->save();

      $this->redirect('funcionarios/edit?id='.$funcionario->getId());
    }
  }
}
