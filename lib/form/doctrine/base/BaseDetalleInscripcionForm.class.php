<?php

/**
 * DetalleInscripcion form base class.
 *
 * @method DetalleInscripcion getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDetalleInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'inscripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Inscripcion'), 'add_empty' => false)),
      'persona_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'), 'add_empty' => false)),
      'coopago'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'inscripcion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Inscripcion'))),
      'persona_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'))),
      'coopago'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detalle_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetalleInscripcion';
  }

}
