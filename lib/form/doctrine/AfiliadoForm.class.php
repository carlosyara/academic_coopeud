<?php

/**
 * Afiliado form.
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AfiliadoForm extends BaseAfiliadoForm
{
  public function configure()
  {
  	parent::configure();
  	$this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'persona_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'), 'add_empty' => false)),
      'fecha_afiliacion' => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true)),
      'tipo'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'persona_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Persona'))),
      'fecha_afiliacion' => new sfValidatorDate(),
      'tipo'             => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('afiliado[%s]');
  }
}
