<?php

/**
 * asociados actions.
 *
 * @package    coopeud
 * @subpackage asociados
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class asociadosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->asociados = Doctrine_Core::getTable('asociado')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->asociado = Doctrine_Core::getTable('asociado')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->asociado);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new asociadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new asociadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($asociado = Doctrine_Core::getTable('asociado')->find(array($request->getParameter('id'))), sprintf('Object asociado does not exist (%s).', $request->getParameter('id')));
    $this->form = new asociadoForm($asociado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($asociado = Doctrine_Core::getTable('asociado')->find(array($request->getParameter('id'))), sprintf('Object asociado does not exist (%s).', $request->getParameter('id')));
    $this->form = new asociadoForm($asociado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($asociado = Doctrine_Core::getTable('asociado')->find(array($request->getParameter('id'))), sprintf('Object asociado does not exist (%s).', $request->getParameter('id')));
    $asociado->delete();

    $this->redirect('asociados/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $asociado = $form->save();

      $this->redirect('asociados/edit?id='.$asociado->getId());
    }
  }
}
