<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Usuario', 'doctrine');

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $password
 * @property string $nickname
 * @property integer $persona_id
 * @property Persona $Persona
 * @property Doctrine_Collection $RolUsuario
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getPassword()   Returns the current record's "password" value
 * @method string              getNickname()   Returns the current record's "nickname" value
 * @method integer             getPersonaId()  Returns the current record's "persona_id" value
 * @method Persona             getPersona()    Returns the current record's "Persona" value
 * @method Doctrine_Collection getRolUsuario() Returns the current record's "RolUsuario" collection
 * @method Usuario             setId()         Sets the current record's "id" value
 * @method Usuario             setPassword()   Sets the current record's "password" value
 * @method Usuario             setNickname()   Sets the current record's "nickname" value
 * @method Usuario             setPersonaId()  Sets the current record's "persona_id" value
 * @method Usuario             setPersona()    Sets the current record's "Persona" value
 * @method Usuario             setRolUsuario() Sets the current record's "RolUsuario" collection
 * 
 * @package    coopeud
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('password', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('nickname', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('persona_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Persona', array(
             'local' => 'persona_id',
             'foreign' => 'id'));

        $this->hasMany('RolUsuario', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));
    }
}