<?php

/**
 * PagoInscripcion form base class.
 *
 * @method PagoInscripcion getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePagoInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'inscripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Inscripcion'), 'add_empty' => false)),
      'cuotas'         => new sfWidgetFormInputText(),
      'total'          => new sfWidgetFormInputText(),
      'estado'         => new sfWidgetFormInputText(),
      'fecha_pago'     => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'inscripcion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Inscripcion'))),
      'cuotas'         => new sfValidatorInteger(),
      'total'          => new sfValidatorInteger(),
      'estado'         => new sfValidatorInteger(array('required' => false)),
      'fecha_pago'     => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('pago_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PagoInscripcion';
  }

}
