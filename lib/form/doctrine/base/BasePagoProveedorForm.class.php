<?php

/**
 * PagoProveedor form base class.
 *
 * @method PagoProveedor getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePagoProveedorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'evento_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Evento'), 'add_empty' => false)),
      'fecha_pago'   => new sfWidgetFormDate(),
      'proveedor_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proveedor'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'evento_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Evento'))),
      'fecha_pago'   => new sfValidatorDate(),
      'proveedor_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proveedor'))),
    ));

    $this->widgetSchema->setNameFormat('pago_proveedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PagoProveedor';
  }

}
