<?php

/**
 * detalle_inscripcion actions.
 *
 * @package    coopeud
 * @subpackage detalle_inscripcion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class detalle_inscripcionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->detalleinscripcions = Doctrine_Core::getTable('detalleinscripcion')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->detalleinscripcion = Doctrine_Core::getTable('detalleinscripcion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->detalleinscripcion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new detalleinscripcionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new detalleinscripcionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($detalleinscripcion = Doctrine_Core::getTable('detalleinscripcion')->find(array($request->getParameter('id'))), sprintf('Object detalleinscripcion does not exist (%s).', $request->getParameter('id')));
    $this->form = new detalleinscripcionForm($detalleinscripcion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($detalleinscripcion = Doctrine_Core::getTable('detalleinscripcion')->find(array($request->getParameter('id'))), sprintf('Object detalleinscripcion does not exist (%s).', $request->getParameter('id')));
    $this->form = new detalleinscripcionForm($detalleinscripcion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($detalleinscripcion = Doctrine_Core::getTable('detalleinscripcion')->find(array($request->getParameter('id'))), sprintf('Object detalleinscripcion does not exist (%s).', $request->getParameter('id')));
    $detalleinscripcion->delete();

    $this->redirect('detalle_inscripcion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $detalleinscripcion = $form->save();

      $this->redirect('detalle_inscripcion/edit?id='.$detalleinscripcion->getId());
    }
  }
}
