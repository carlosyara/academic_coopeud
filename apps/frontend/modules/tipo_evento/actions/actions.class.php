<?php

/**
 * tipo_evento actions.
 *
 * @package    coopeud
 * @subpackage tipo_evento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipo_eventoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tipoeventos = Doctrine_Core::getTable('tipoevento')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->tipoevento = Doctrine_Core::getTable('tipoevento')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->tipoevento);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tipoeventoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tipoeventoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tipoevento = Doctrine_Core::getTable('tipoevento')->find(array($request->getParameter('id'))), sprintf('Object tipoevento does not exist (%s).', $request->getParameter('id')));
    $this->form = new tipoeventoForm($tipoevento);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipoevento = Doctrine_Core::getTable('tipoevento')->find(array($request->getParameter('id'))), sprintf('Object tipoevento does not exist (%s).', $request->getParameter('id')));
    $this->form = new tipoeventoForm($tipoevento);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipoevento = Doctrine_Core::getTable('tipoevento')->find(array($request->getParameter('id'))), sprintf('Object tipoevento does not exist (%s).', $request->getParameter('id')));
    $tipoevento->delete();

    $this->redirect('tipo_evento/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tipoevento = $form->save();

      $this->redirect('tipo_evento/edit?id='.$tipoevento->getId());
    }
  }
}
