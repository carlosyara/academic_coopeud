<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RolUsuario', 'doctrine');

/**
 * BaseRolUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $usuario_id
 * @property integer $rol_id
 * @property Rol $Rol
 * @property Usuario $Usuario
 * 
 * @method integer    getId()         Returns the current record's "id" value
 * @method integer    getUsuarioId()  Returns the current record's "usuario_id" value
 * @method integer    getRolId()      Returns the current record's "rol_id" value
 * @method Rol        getRol()        Returns the current record's "Rol" value
 * @method Usuario    getUsuario()    Returns the current record's "Usuario" value
 * @method RolUsuario setId()         Sets the current record's "id" value
 * @method RolUsuario setUsuarioId()  Sets the current record's "usuario_id" value
 * @method RolUsuario setRolId()      Sets the current record's "rol_id" value
 * @method RolUsuario setRol()        Sets the current record's "Rol" value
 * @method RolUsuario setUsuario()    Sets the current record's "Usuario" value
 * 
 * @package    coopeud
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRolUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rol_usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('rol_id', 'integer', 4, array(
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
        $this->hasOne('Rol', array(
             'local' => 'rol_id',
             'foreign' => 'id'));

        $this->hasOne('Usuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}