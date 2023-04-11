<?php

namespace ActualizaDatosGenerales\Client\Model;

use \ArrayAccess;
use \ActualizaDatosGenerales\Client\ObjectSerializer;

class RespuestaADGDomicilioADG implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RespuestaADG_domicilioADG';
    
    protected static $apihubTypes = [
        'numero_cuenta' => 'string',
        'calle' => 'string',
        'colonia' => 'string',
        'ciudad' => 'string',
        'telefono' => 'string',
        'estado' => 'string',
        'municipio' => 'string',
        'cp' => 'string',
        'fecha_alta' => 'string',
        'tipo_alta' => 'string',
        'num_consultas' => 'string',
        'fecha_ultima_consulta' => 'string',
        'comparacion_cp' => 'string',
        'comparacion_estado' => 'string',
        'comparacion_tel' => 'string',
        'folio_domicilio' => 'string'
    ];
    
    protected static $apihubFormats = [
        'numero_cuenta' => null,
        'calle' => null,
        'colonia' => null,
        'ciudad' => null,
        'telefono' => null,
        'estado' => null,
        'municipio' => null,
        'cp' => null,
        'fecha_alta' => null,
        'tipo_alta' => null,
        'num_consultas' => null,
        'fecha_ultima_consulta' => null,
        'comparacion_cp' => null,
        'comparacion_estado' => null,
        'comparacion_tel' => null,
        'folio_domicilio' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'numero_cuenta' => 'numeroCuenta',
        'calle' => 'calle',
        'colonia' => 'colonia',
        'ciudad' => 'ciudad',
        'telefono' => 'telefono',
        'estado' => 'estado',
        'municipio' => 'municipio',
        'cp' => 'cp',
        'fecha_alta' => 'fechaAlta',
        'tipo_alta' => 'tipoAlta',
        'num_consultas' => 'numConsultas',
        'fecha_ultima_consulta' => 'fechaUltimaConsulta',
        'comparacion_cp' => 'comparacionCP',
        'comparacion_estado' => 'comparacionEstado',
        'comparacion_tel' => 'comparacionTel',
        'folio_domicilio' => 'FolioDomicilio'
    ];
    
    protected static $setters = [
        'numero_cuenta' => 'setNumeroCuenta',
        'calle' => 'setCalle',
        'colonia' => 'setColonia',
        'ciudad' => 'setCiudad',
        'telefono' => 'setTelefono',
        'estado' => 'setEstado',
        'municipio' => 'setMunicipio',
        'cp' => 'setCp',
        'fecha_alta' => 'setFechaAlta',
        'tipo_alta' => 'setTipoAlta',
        'num_consultas' => 'setNumConsultas',
        'fecha_ultima_consulta' => 'setFechaUltimaConsulta',
        'comparacion_cp' => 'setComparacionCp',
        'comparacion_estado' => 'setComparacionEstado',
        'comparacion_tel' => 'setComparacionTel',
        'folio_domicilio' => 'setFolioDomicilio'
    ];
    
    protected static $getters = [
        'numero_cuenta' => 'getNumeroCuenta',
        'calle' => 'getCalle',
        'colonia' => 'getColonia',
        'ciudad' => 'getCiudad',
        'telefono' => 'getTelefono',
        'estado' => 'getEstado',
        'municipio' => 'getMunicipio',
        'cp' => 'getCp',
        'fecha_alta' => 'getFechaAlta',
        'tipo_alta' => 'getTipoAlta',
        'num_consultas' => 'getNumConsultas',
        'fecha_ultima_consulta' => 'getFechaUltimaConsulta',
        'comparacion_cp' => 'getComparacionCp',
        'comparacion_estado' => 'getComparacionEstado',
        'comparacion_tel' => 'getComparacionTel',
        'folio_domicilio' => 'getFolioDomicilio'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['numero_cuenta'] = isset($data['numero_cuenta']) ? $data['numero_cuenta'] : null;
        $this->container['calle'] = isset($data['calle']) ? $data['calle'] : null;
        $this->container['colonia'] = isset($data['colonia']) ? $data['colonia'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['municipio'] = isset($data['municipio']) ? $data['municipio'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['fecha_alta'] = isset($data['fecha_alta']) ? $data['fecha_alta'] : null;
        $this->container['tipo_alta'] = isset($data['tipo_alta']) ? $data['tipo_alta'] : null;
        $this->container['num_consultas'] = isset($data['num_consultas']) ? $data['num_consultas'] : null;
        $this->container['fecha_ultima_consulta'] = isset($data['fecha_ultima_consulta']) ? $data['fecha_ultima_consulta'] : null;
        $this->container['comparacion_cp'] = isset($data['comparacion_cp']) ? $data['comparacion_cp'] : null;
        $this->container['comparacion_estado'] = isset($data['comparacion_estado']) ? $data['comparacion_estado'] : null;
        $this->container['comparacion_tel'] = isset($data['comparacion_tel']) ? $data['comparacion_tel'] : null;
        $this->container['folio_domicilio'] = isset($data['folio_domicilio']) ? $data['folio_domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNumeroCuenta()
    {
        return $this->container['numero_cuenta'];
    }
    
    public function setNumeroCuenta($numero_cuenta)
    {
        $this->container['numero_cuenta'] = $numero_cuenta;
        return $this;
    }
    
    public function getCalle()
    {
        return $this->container['calle'];
    }
    
    public function setCalle($calle)
    {
        $this->container['calle'] = $calle;
        return $this;
    }
    
    public function getColonia()
    {
        return $this->container['colonia'];
    }
    
    public function setColonia($colonia)
    {
        $this->container['colonia'] = $colonia;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getTelefono()
    {
        return $this->container['telefono'];
    }
    
    public function setTelefono($telefono)
    {
        $this->container['telefono'] = $telefono;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;
        return $this;
    }
    
    public function getMunicipio()
    {
        return $this->container['municipio'];
    }
    
    public function setMunicipio($municipio)
    {
        $this->container['municipio'] = $municipio;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getFechaAlta()
    {
        return $this->container['fecha_alta'];
    }
    
    public function setFechaAlta($fecha_alta)
    {
        $this->container['fecha_alta'] = $fecha_alta;
        return $this;
    }
    
    public function getTipoAlta()
    {
        return $this->container['tipo_alta'];
    }
    
    public function setTipoAlta($tipo_alta)
    {
        $this->container['tipo_alta'] = $tipo_alta;
        return $this;
    }
    
    public function getNumConsultas()
    {
        return $this->container['num_consultas'];
    }
    
    public function setNumConsultas($num_consultas)
    {
        $this->container['num_consultas'] = $num_consultas;
        return $this;
    }
    
    public function getFechaUltimaConsulta()
    {
        return $this->container['fecha_ultima_consulta'];
    }
    
    public function setFechaUltimaConsulta($fecha_ultima_consulta)
    {
        $this->container['fecha_ultima_consulta'] = $fecha_ultima_consulta;
        return $this;
    }
    
    public function getComparacionCp()
    {
        return $this->container['comparacion_cp'];
    }
    
    public function setComparacionCp($comparacion_cp)
    {
        $this->container['comparacion_cp'] = $comparacion_cp;
        return $this;
    }
    
    public function getComparacionEstado()
    {
        return $this->container['comparacion_estado'];
    }
    
    public function setComparacionEstado($comparacion_estado)
    {
        $this->container['comparacion_estado'] = $comparacion_estado;
        return $this;
    }
    
    public function getComparacionTel()
    {
        return $this->container['comparacion_tel'];
    }
    
    public function setComparacionTel($comparacion_tel)
    {
        $this->container['comparacion_tel'] = $comparacion_tel;
        return $this;
    }
    
    public function getFolioDomicilio()
    {
        return $this->container['folio_domicilio'];
    }
    
    public function setFolioDomicilio($folio_domicilio)
    {
        $this->container['folio_domicilio'] = $folio_domicilio;
        return $this;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
