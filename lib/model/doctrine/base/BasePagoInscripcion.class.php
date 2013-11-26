<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PagoInscripcion', 'doctrine');

/**
 * BasePagoInscripcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $inscripcion_id
 * @property integer $cuotas
 * @property integer $total
 * @property integer $estado
 * @property date $fecha_pago
 * @property Inscripcion $Inscripcion
 * 
 * @method integer         getId()             Returns the current record's "id" value
 * @method integer         getInscripcionId()  Returns the current record's "inscripcion_id" value
 * @method integer         getCuotas()         Returns the current record's "cuotas" value
 * @method integer         getTotal()          Returns the current record's "total" value
 * @method integer         getEstado()         Returns the current record's "estado" value
 * @method date            getFechaPago()      Returns the current record's "fecha_pago" value
 * @method Inscripcion     getInscripcion()    Returns the current record's "Inscripcion" value
 * @method PagoInscripcion setId()             Sets the current record's "id" value
 * @method PagoInscripcion setInscripcionId()  Sets the current record's "inscripcion_id" value
 * @method PagoInscripcion setCuotas()         Sets the current record's "cuotas" value
 * @method PagoInscripcion setTotal()          Sets the current record's "total" value
 * @method PagoInscripcion setEstado()         Sets the current record's "estado" value
 * @method PagoInscripcion setFechaPago()      Sets the current record's "fecha_pago" value
 * @method PagoInscripcion setInscripcion()    Sets the current record's "Inscripcion" value
 * 
 * @package    coopeud
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePagoInscripcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pago_inscripcion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cuotas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('total', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('estado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_pago', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Inscripcion', array(
             'local' => 'inscripcion_id',
             'foreign' => 'id'));
    }
}