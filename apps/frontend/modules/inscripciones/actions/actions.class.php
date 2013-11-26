<?php

/**
 * inscripciones actions.
 *
 * @package    coopeud
 * @subpackage inscripciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inscripcionesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->inscripcions = Doctrine_Core::getTable('inscripcion')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->inscripcion = Doctrine_Core::getTable('inscripcion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->inscripcion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new inscripcionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new inscripcionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($inscripcion = Doctrine_Core::getTable('inscripcion')->find(array($request->getParameter('id'))), sprintf('Object inscripcion does not exist (%s).', $request->getParameter('id')));
    $this->form = new inscripcionForm($inscripcion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($inscripcion = Doctrine_Core::getTable('inscripcion')->find(array($request->getParameter('id'))), sprintf('Object inscripcion does not exist (%s).', $request->getParameter('id')));
    $this->form = new inscripcionForm($inscripcion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($inscripcion = Doctrine_Core::getTable('inscripcion')->find(array($request->getParameter('id'))), sprintf('Object inscripcion does not exist (%s).', $request->getParameter('id')));
    $inscripcion->delete();

    $this->redirect('inscripciones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $inscripcion = $form->save();

      $this->redirect('inscripciones/edit?id='.$inscripcion->getId());
    }
  }
}
