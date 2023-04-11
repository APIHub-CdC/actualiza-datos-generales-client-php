<?php

namespace ActualizaDatosGenerales\Client\Model;

use \ArrayAccess;
use \ActualizaDatosGenerales\Client\ObjectSerializer;

class RespuestaADGEmpleoADG implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RespuestaADG_empleoADG';
    
    protected static $apihubTypes = [
        'numero_cuenta' => 'string',
        'empleo' => 'string',
        'calle_empleo' => 'string',
        'colonia_empleo' => 'string',
        'ciudad_empleo' => 'string',
        'telefono_empleo' => 'string',
        'puesto' => 'string',
        'salario' => 'string',
        'estado_empleo' => 'string',
        'municipio_empleo' => 'string',
        'cp_empleo' => 'string',
        'fecha_alta' => 'string'
    ];
    
    protected static $apihubFormats = [
        'numero_cuenta' => null,
        'empleo' => null,
        'calle_empleo' => null,
        'colonia_empleo' => null,
        'ciudad_empleo' => null,
        'telefono_empleo' => null,
        'puesto' => null,
        'salario' => null,
        'estado_empleo' => null,
        'municipio_empleo' => null,
        'cp_empleo' => null,
        'fecha_alta' => null
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
        'empleo' => 'empleo',
        'calle_empleo' => 'calleEmpleo',
        'colonia_empleo' => 'coloniaEmpleo',
        'ciudad_empleo' => 'ciudadEmpleo',
        'telefono_empleo' => 'telefonoEmpleo',
        'puesto' => 'puesto',
        'salario' => 'salario',
        'estado_empleo' => 'estadoEmpleo',
        'municipio_empleo' => 'municipioEmpleo',
        'cp_empleo' => 'cpEmpleo',
        'fecha_alta' => 'fechaAlta'
    ];
    
    protected static $setters = [
        'numero_cuenta' => 'setNumeroCuenta',
        'empleo' => 'setEmpleo',
        'calle_empleo' => 'setCalleEmpleo',
        'colonia_empleo' => 'setColoniaEmpleo',
        'ciudad_empleo' => 'setCiudadEmpleo',
        'telefono_empleo' => 'setTelefonoEmpleo',
        'puesto' => 'setPuesto',
        'salario' => 'setSalario',
        'estado_empleo' => 'setEstadoEmpleo',
        'municipio_empleo' => 'setMunicipioEmpleo',
        'cp_empleo' => 'setCpEmpleo',
        'fecha_alta' => 'setFechaAlta'
    ];
    
    protected static $getters = [
        'numero_cuenta' => 'getNumeroCuenta',
        'empleo' => 'getEmpleo',
        'calle_empleo' => 'getCalleEmpleo',
        'colonia_empleo' => 'getColoniaEmpleo',
        'ciudad_empleo' => 'getCiudadEmpleo',
        'telefono_empleo' => 'getTelefonoEmpleo',
        'puesto' => 'getPuesto',
        'salario' => 'getSalario',
        'estado_empleo' => 'getEstadoEmpleo',
        'municipio_empleo' => 'getMunicipioEmpleo',
        'cp_empleo' => 'getCpEmpleo',
        'fecha_alta' => 'getFechaAlta'
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
        $this->container['empleo'] = isset($data['empleo']) ? $data['empleo'] : null;
        $this->container['calle_empleo'] = isset($data['calle_empleo']) ? $data['calle_empleo'] : null;
        $this->container['colonia_empleo'] = isset($data['colonia_empleo']) ? $data['colonia_empleo'] : null;
        $this->container['ciudad_empleo'] = isset($data['ciudad_empleo']) ? $data['ciudad_empleo'] : null;
        $this->container['telefono_empleo'] = isset($data['telefono_empleo']) ? $data['telefono_empleo'] : null;
        $this->container['puesto'] = isset($data['puesto']) ? $data['puesto'] : null;
        $this->container['salario'] = isset($data['salario']) ? $data['salario'] : null;
        $this->container['estado_empleo'] = isset($data['estado_empleo']) ? $data['estado_empleo'] : null;
        $this->container['municipio_empleo'] = isset($data['municipio_empleo']) ? $data['municipio_empleo'] : null;
        $this->container['cp_empleo'] = isset($data['cp_empleo']) ? $data['cp_empleo'] : null;
        $this->container['fecha_alta'] = isset($data['fecha_alta']) ? $data['fecha_alta'] : null;
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
    
    public function getEmpleo()
    {
        return $this->container['empleo'];
    }
    
    public function setEmpleo($empleo)
    {
        $this->container['empleo'] = $empleo;
        return $this;
    }
    
    public function getCalleEmpleo()
    {
        return $this->container['calle_empleo'];
    }
    
    public function setCalleEmpleo($calle_empleo)
    {
        $this->container['calle_empleo'] = $calle_empleo;
        return $this;
    }
    
    public function getColoniaEmpleo()
    {
        return $this->container['colonia_empleo'];
    }
    
    public function setColoniaEmpleo($colonia_empleo)
    {
        $this->container['colonia_empleo'] = $colonia_empleo;
        return $this;
    }
    
    public function getCiudadEmpleo()
    {
        return $this->container['ciudad_empleo'];
    }
    
    public function setCiudadEmpleo($ciudad_empleo)
    {
        $this->container['ciudad_empleo'] = $ciudad_empleo;
        return $this;
    }
    
    public function getTelefonoEmpleo()
    {
        return $this->container['telefono_empleo'];
    }
    
    public function setTelefonoEmpleo($telefono_empleo)
    {
        $this->container['telefono_empleo'] = $telefono_empleo;
        return $this;
    }
    
    public function getPuesto()
    {
        return $this->container['puesto'];
    }
    
    public function setPuesto($puesto)
    {
        $this->container['puesto'] = $puesto;
        return $this;
    }
    
    public function getSalario()
    {
        return $this->container['salario'];
    }
    
    public function setSalario($salario)
    {
        $this->container['salario'] = $salario;
        return $this;
    }
    
    public function getEstadoEmpleo()
    {
        return $this->container['estado_empleo'];
    }
    
    public function setEstadoEmpleo($estado_empleo)
    {
        $this->container['estado_empleo'] = $estado_empleo;
        return $this;
    }
    
    public function getMunicipioEmpleo()
    {
        return $this->container['municipio_empleo'];
    }
    
    public function setMunicipioEmpleo($municipio_empleo)
    {
        $this->container['municipio_empleo'] = $municipio_empleo;
        return $this;
    }
    
    public function getCpEmpleo()
    {
        return $this->container['cp_empleo'];
    }
    
    public function setCpEmpleo($cp_empleo)
    {
        $this->container['cp_empleo'] = $cp_empleo;
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
