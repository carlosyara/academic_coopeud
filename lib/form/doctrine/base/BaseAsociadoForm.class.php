<?php

/**
 * Asociado form base class.
 *
 * @method Asociado getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAsociadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'afiliado_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'afiliado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'))),
    ));

    $this->widgetSchema->setNameFormat('asociado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asociado';
  }

}
