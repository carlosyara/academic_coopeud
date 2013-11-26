<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Permiso', 'doctrine');

/**
 * BasePermiso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $RolPermiso
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getNombre()     Returns the current record's "nombre" value
 * @method Doctrine_Collection getRolPermiso() Returns the current record's "RolPermiso" collection
 * @method Permiso             setId()         Sets the current record's "id" value
 * @method Permiso             setNombre()     Sets the current record's "nombre" value
 * @method Permiso             setRolPermiso() Sets the current record's "RolPermiso" collection
 * 
 * @package    coopeud
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePermiso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('permiso');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('RolPermiso', array(
             'local' => 'id',
             'foreign' => 'permiso_id'));
    }
}