<?php

/**
 * Afiliado form base class.
 *
 * @method Afiliado getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAfiliadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'persona_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'fecha_afiliacion' => new sfWidgetFormDate(),
      'tipo'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'persona_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'fecha_afiliacion' => new sfValidatorDate(),
      'tipo'             => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

}
