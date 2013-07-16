<?php

/**
 * Cliente filter form base class.
 *
 * @package    veranda
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseClienteFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_razon_social' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contacto'            => new sfWidgetFormFilterInput(),
      'calle'               => new sfWidgetFormFilterInput(),
      'numero_ext_int'      => new sfWidgetFormFilterInput(),
      'colonia'             => new sfWidgetFormFilterInput(),
      'cp'                  => new sfWidgetFormFilterInput(),
      'telefono'            => new sfWidgetFormFilterInput(),
      'celular'             => new sfWidgetFormFilterInput(),
      'correo_electronico'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre_razon_social' => new sfValidatorPass(array('required' => false)),
      'contacto'            => new sfValidatorPass(array('required' => false)),
      'calle'               => new sfValidatorPass(array('required' => false)),
      'numero_ext_int'      => new sfValidatorPass(array('required' => false)),
      'colonia'             => new sfValidatorPass(array('required' => false)),
      'cp'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'telefono'            => new sfValidatorPass(array('required' => false)),
      'celular'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'correo_electronico'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nombre_razon_social' => 'Text',
      'contacto'            => 'Text',
      'calle'               => 'Text',
      'numero_ext_int'      => 'Text',
      'colonia'             => 'Text',
      'cp'                  => 'Number',
      'telefono'            => 'Text',
      'celular'             => 'Number',
      'correo_electronico'  => 'Text',
    );
  }
}
