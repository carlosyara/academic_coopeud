<?php

/**
 * Beneficiario form base class.
 *
 * @method Beneficiario getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBeneficiarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'asociado_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asociado'), 'add_empty' => false)),
      'afiliado_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'), 'add_empty' => false)),
      'parentesco'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asociado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asociado'))),
      'afiliado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Afiliado'))),
      'parentesco'  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('beneficiario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Beneficiario';
  }

}
