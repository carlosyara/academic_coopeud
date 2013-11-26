<?php

/**
 * Inscripcion form base class.
 *
 * @method Inscripcion getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'evento_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Evento'), 'add_empty' => false)),
      'asociado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asociado'), 'add_empty' => false)),
      'fecha_inscripcion' => new sfWidgetFormDate(),
      'estado'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'evento_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Evento'))),
      'asociado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asociado'))),
      'fecha_inscripcion' => new sfValidatorDate(),
      'estado'            => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inscripcion';
  }

}
