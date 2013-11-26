<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Inscripcion', 'doctrine');

/**
 * BaseInscripcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $evento_id
 * @property integer $asociado_id
 * @property date $fecha_inscripcion
 * @property integer $estado
 * @property Asociado $Asociado
 * @property Evento $Evento
 * @property Doctrine_Collection $DetalleInscripcion
 * @property Doctrine_Collection $PagoInscripcion
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method integer             getEventoId()           Returns the current record's "evento_id" value
 * @method integer             getAsociadoId()         Returns the current record's "asociado_id" value
 * @method date                getFechaInscripcion()   Returns the current record's "fecha_inscripcion" value
 * @method integer             getEstado()             Returns the current record's "estado" value
 * @method Asociado            getAsociado()           Returns the current record's "Asociado" value
 * @method Evento              getEvento()             Returns the current record's "Evento" value
 * @method Doctrine_Collection getDetalleInscripcion() Returns the current record's "DetalleInscripcion" collection
 * @method Doctrine_Collection getPagoInscripcion()    Returns the current record's "PagoInscripcion" collection
 * @method Inscripcion         setId()                 Sets the current record's "id" value
 * @method Inscripcion         setEventoId()           Sets the current record's "evento_id" value
 * @method Inscripcion         setAsociadoId()         Sets the current record's "asociado_id" value
 * @method Inscripcion         setFechaInscripcion()   Sets the current record's "fecha_inscripcion" value
 * @method Inscripcion         setEstado()             Sets the current record's "estado" value
 * @method Inscripcion         setAsociado()           Sets the current record's "Asociado" value
 * @method Inscripcion         setEvento()             Sets the current record's "Evento" value
 * @method Inscripcion         setDetalleInscripcion() Sets the current record's "DetalleInscripcion" collection
 * @method Inscripcion         setPagoInscripcion()    Sets the current record's "PagoInscripcion" collection
 * 
 * @package    coopeud
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInscripcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('inscripcion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('evento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('asociado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_inscripcion', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('estado', 'integer', 4, array(
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
        $this->hasOne('Asociado', array(
             'local' => 'asociado_id',
             'foreign' => 'id'));

        $this->hasOne('Evento', array(
             'local' => 'evento_id',
             'foreign' => 'id'));

        $this->hasMany('DetalleInscripcion', array(
             'local' => 'id',
             'foreign' => 'inscripcion_id'));

        $this->hasMany('PagoInscripcion', array(
             'local' => 'id',
             'foreign' => 'inscripcion_id'));
    }
}