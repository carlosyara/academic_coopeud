<?php

/**
 * EventoCierre form base class.
 *
 * @method EventoCierre getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventoCierreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'evento_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Evento'), 'add_empty' => false)),
      'total_recaudo'    => new sfWidgetFormInputText(),
      'diferencia'       => new sfWidgetFormInputText(),
      'total_asistentes' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'evento_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Evento'))),
      'total_recaudo'    => new sfValidatorInteger(array('required' => false)),
      'diferencia'       => new sfValidatorInteger(),
      'total_asistentes' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('evento_cierre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EventoCierre';
  }

}
