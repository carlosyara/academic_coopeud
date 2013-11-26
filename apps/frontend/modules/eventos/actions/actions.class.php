<?php

/**
 * eventos actions.
 *
 * @package    coopeud
 * @subpackage eventos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->eventos = Doctrine_Core::getTable('evento')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->evento = Doctrine_Core::getTable('evento')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->evento);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new eventoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new eventoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($evento = Doctrine_Core::getTable('evento')->find(array($request->getParameter('id'))), sprintf('Object evento does not exist (%s).', $request->getParameter('id')));
    $this->form = new eventoForm($evento);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($evento = Doctrine_Core::getTable('evento')->find(array($request->getParameter('id'))), sprintf('Object evento does not exist (%s).', $request->getParameter('id')));
    $this->form = new eventoForm($evento);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($evento = Doctrine_Core::getTable('evento')->find(array($request->getParameter('id'))), sprintf('Object evento does not exist (%s).', $request->getParameter('id')));
    $evento->delete();

    $this->redirect('eventos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $evento = $form->save();

      $this->redirect('eventos/edit?id='.$evento->getId());
    }
  }
}
