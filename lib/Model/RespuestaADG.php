<?php

namespace ActualizaDatosGenerales\Client\Model;

use \ArrayAccess;
use \ActualizaDatosGenerales\Client\ObjectSerializer;

class RespuestaADG implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RespuestaADG';
    
    protected static $apihubTypes = [
        'persona_adg' => '\ActualizaDatosGenerales\Client\Model\RespuestaADGPersonaADG',
        'domicilio_adg' => '\ActualizaDatosGenerales\Client\Model\RespuestaADGDomicilioADG',
        'empleo_adg' => '\ActualizaDatosGenerales\Client\Model\RespuestaADGEmpleoADG',
        'variables_domicilio' => '\ActualizaDatosGenerales\Client\Model\RespuestaADGVariablesDomicilio',
        'success' => 'bool',
        'description' => 'string',
        'folio_consulta' => 'string'
    ];
    
    protected static $apihubFormats = [
        'persona_adg' => null,
        'domicilio_adg' => null,
        'empleo_adg' => null,
        'variables_domicilio' => null,
        'success' => null,
        'description' => null,
        'folio_consulta' => null
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
        'persona_adg' => 'personaADG',
        'domicilio_adg' => 'domicilioADG',
        'empleo_adg' => 'empleoADG',
        'variables_domicilio' => 'VariablesDomicilio',
        'success' => 'success',
        'description' => 'description',
        'folio_consulta' => 'folioConsulta'
    ];
    
    protected static $setters = [
        'persona_adg' => 'setPersonaAdg',
        'domicilio_adg' => 'setDomicilioAdg',
        'empleo_adg' => 'setEmpleoAdg',
        'variables_domicilio' => 'setVariablesDomicilio',
        'success' => 'setSuccess',
        'description' => 'setDescription',
        'folio_consulta' => 'setFolioConsulta'
    ];
    
    protected static $getters = [
        'persona_adg' => 'getPersonaAdg',
        'domicilio_adg' => 'getDomicilioAdg',
        'empleo_adg' => 'getEmpleoAdg',
        'variables_domicilio' => 'getVariablesDomicilio',
        'success' => 'getSuccess',
        'description' => 'getDescription',
        'folio_consulta' => 'getFolioConsulta'
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
        $this->container['persona_adg'] = isset($data['persona_adg']) ? $data['persona_adg'] : null;
        $this->container['domicilio_adg'] = isset($data['domicilio_adg']) ? $data['domicilio_adg'] : null;
        $this->container['empleo_adg'] = isset($data['empleo_adg']) ? $data['empleo_adg'] : null;
        $this->container['variables_domicilio'] = isset($data['variables_domicilio']) ? $data['variables_domicilio'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
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
    
    public function getPersonaAdg()
    {
        return $this->container['persona_adg'];
    }
    
    public function setPersonaAdg($persona_adg)
    {
        $this->container['persona_adg'] = $persona_adg;
        return $this;
    }
    
    public function getDomicilioAdg()
    {
        return $this->container['domicilio_adg'];
    }
    
    public function setDomicilioAdg($domicilio_adg)
    {
        $this->container['domicilio_adg'] = $domicilio_adg;
        return $this;
    }
    
    public function getEmpleoAdg()
    {
        return $this->container['empleo_adg'];
    }
    
    public function setEmpleoAdg($empleo_adg)
    {
        $this->container['empleo_adg'] = $empleo_adg;
        return $this;
    }
    
    public function getVariablesDomicilio()
    {
        return $this->container['variables_domicilio'];
    }
    
    public function setVariablesDomicilio($variables_domicilio)
    {
        $this->container['variables_domicilio'] = $variables_domicilio;
        return $this;
    }
    
    public function getSuccess()
    {
        return $this->container['success'];
    }
    
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }
    
    public function getDescription()
    {
        return $this->container['description'];
    }
    
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        $this->container['folio_consulta'] = $folio_consulta;
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
