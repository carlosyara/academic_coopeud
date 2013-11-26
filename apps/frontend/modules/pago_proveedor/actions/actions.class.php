<?php

/**
 * pago_proveedor actions.
 *
 * @package    coopeud
 * @subpackage pago_proveedor
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pago_proveedorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->pagoproveedors = Doctrine_Core::getTable('pagoproveedor')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->pagoproveedor = Doctrine_Core::getTable('pagoproveedor')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->pagoproveedor);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new pagoproveedorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new pagoproveedorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($pagoproveedor = Doctrine_Core::getTable('pagoproveedor')->find(array($request->getParameter('id'))), sprintf('Object pagoproveedor does not exist (%s).', $request->getParameter('id')));
    $this->form = new pagoproveedorForm($pagoproveedor);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($pagoproveedor = Doctrine_Core::getTable('pagoproveedor')->find(array($request->getParameter('id'))), sprintf('Object pagoproveedor does not exist (%s).', $request->getParameter('id')));
    $this->form = new pagoproveedorForm($pagoproveedor);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($pagoproveedor = Doctrine_Core::getTable('pagoproveedor')->find(array($request->getParameter('id'))), sprintf('Object pagoproveedor does not exist (%s).', $request->getParameter('id')));
    $pagoproveedor->delete();

    $this->redirect('pago_proveedor/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pagoproveedor = $form->save();

      $this->redirect('pago_proveedor/edit?id='.$pagoproveedor->getId());
    }
  }
}
