<?php

/**
 * RolPermiso form base class.
 *
 * @method RolPermiso getObject() Returns the current form's model object
 *
 * @package    coopeud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRolPermisoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'rol_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Rol'), 'add_empty' => false)),
      'permiso_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Permiso'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'rol_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Rol'))),
      'permiso_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Permiso'))),
    ));

    $this->widgetSchema->setNameFormat('rol_permiso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RolPermiso';
  }

}
