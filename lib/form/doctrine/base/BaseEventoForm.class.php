<?php

/**
 * Evento form base class.
 *
 * @method Evento getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'nombre'                => new sfWidgetFormInputText(),
      'valor_total'           => new sfWidgetFormInputText(),
      'proveedor_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proveedor'), 'add_empty' => false)),
      'tipo-evento_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEvento'), 'add_empty' => false)),
      'estado'                => new sfWidgetFormInputText(),
      'con_copago'            => new sfWidgetFormInputText(),
      'numero_asistentes'     => new sfWidgetFormInputText(),
      'cupo_disponible'       => new sfWidgetFormInputText(),
      'subisidio_copago'      => new sfWidgetFormInputText(),
      'lugar'                 => new sfWidgetFormInputText(),
      'fecha_inicio'          => new sfWidgetFormDate(),
      'fecha_fin'             => new sfWidgetFormDate(),
      'fecha_max_inscripcion' => new sfWidgetFormDate(),
      'fecha_max_cancelacion' => new sfWidgetFormDate(),
      'observaciones'         => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'                => new sfValidatorString(array('max_length' => 45)),
      'valor_total'           => new sfValidatorInteger(),
      'proveedor_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Proveedor'))),
      'tipo-evento_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoEvento'))),
      'estado'                => new sfValidatorInteger(),
      'con_copago'            => new sfValidatorInteger(),
      'numero_asistentes'     => new sfValidatorInteger(),
      'cupo_disponible'       => new sfValidatorInteger(),
      'subisidio_copago'      => new sfValidatorInteger(),
      'lugar'                 => new sfValidatorString(array('max_length' => 100)),
      'fecha_inicio'          => new sfValidatorDate(),
      'fecha_fin'             => new sfValidatorDate(),
      'fecha_max_inscripcion' => new sfValidatorDate(),
      'fecha_max_cancelacion' => new sfValidatorDate(),
      'observaciones'         => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evento';
  }

}
