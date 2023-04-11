<?php

namespace ActualizaDatosGenerales\Client\Model;

use \ArrayAccess;
use \ActualizaDatosGenerales\Client\ObjectSerializer;

class RequestADG implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RequestADG';
    
    protected static $apihubTypes = [
        'num_otorgante' => 'string',
        'cuenta' => 'string',
        'clave_estado' => '\ActualizaDatosGenerales\Client\Model\CatalogoEstados',
        'cp' => 'string',
        'folio_otorgante' => 'string'
    ];
    
    protected static $apihubFormats = [
        'num_otorgante' => null,
        'cuenta' => null,
        'clave_estado' => null,
        'cp' => null,
        'folio_otorgante' => null
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
        'num_otorgante' => 'numOtorgante',
        'cuenta' => 'cuenta',
        'clave_estado' => 'claveEstado',
        'cp' => 'cp',
        'folio_otorgante' => 'folioOtorgante'
    ];
    
    protected static $setters = [
        'num_otorgante' => 'setNumOtorgante',
        'cuenta' => 'setCuenta',
        'clave_estado' => 'setClaveEstado',
        'cp' => 'setCp',
        'folio_otorgante' => 'setFolioOtorgante'
    ];
    
    protected static $getters = [
        'num_otorgante' => 'getNumOtorgante',
        'cuenta' => 'getCuenta',
        'clave_estado' => 'getClaveEstado',
        'cp' => 'getCp',
        'folio_otorgante' => 'getFolioOtorgante'
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
        $this->container['num_otorgante'] = isset($data['num_otorgante']) ? $data['num_otorgante'] : null;
        $this->container['cuenta'] = isset($data['cuenta']) ? $data['cuenta'] : null;
        $this->container['clave_estado'] = isset($data['clave_estado']) ? $data['clave_estado'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['num_otorgante'] === null) {
            $invalidProperties[] = "'num_otorgante' can't be null";
        }
        if ((mb_strlen($this->container['num_otorgante']) > 6)) {
            $invalidProperties[] = "invalid value for 'num_otorgante', the character length must be smaller than or equal to 6.";
        }
        if ((mb_strlen($this->container['num_otorgante']) < 6)) {
            $invalidProperties[] = "invalid value for 'num_otorgante', the character length must be bigger than or equal to 6.";
        }
        if (!preg_match("/(^[0-9]+)$/", $this->container['num_otorgante'])) {
            $invalidProperties[] = "invalid value for 'num_otorgante', must be conform to the pattern /(^[0-9]+)$/.";
        }
        if ($this->container['cuenta'] === null) {
            $invalidProperties[] = "'cuenta' can't be null";
        }
        if ((mb_strlen($this->container['cuenta']) > 25)) {
            $invalidProperties[] = "invalid value for 'cuenta', the character length must be smaller than or equal to 25.";
        }
        if ((mb_strlen($this->container['cuenta']) < 1)) {
            $invalidProperties[] = "invalid value for 'cuenta', the character length must be bigger than or equal to 1.";
        }
        if (!preg_match("/(^[A-Za-z0-9]+)$/", $this->container['cuenta'])) {
            $invalidProperties[] = "invalid value for 'cuenta', must be conform to the pattern /(^[A-Za-z0-9]+)$/.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) > 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) < 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['cp']) && !preg_match("/(^[0-9]+)$/", $this->container['cp'])) {
            $invalidProperties[] = "invalid value for 'cp', must be conform to the pattern /(^[0-9]+)$/.";
        }
        if (!is_null($this->container['folio_otorgante']) && (mb_strlen($this->container['folio_otorgante']) > 5)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['folio_otorgante']) && (mb_strlen($this->container['folio_otorgante']) < 5)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['folio_otorgante']) && !preg_match("/(^[0-9]+)$/", $this->container['folio_otorgante'])) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', must be conform to the pattern /(^[0-9]+)$/.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNumOtorgante()
    {
        return $this->container['num_otorgante'];
    }
    
    public function setNumOtorgante($num_otorgante)
    {
        if ((mb_strlen($num_otorgante) > 6)) {
            throw new \InvalidArgumentException('invalid length for $num_otorgante when calling RequestADG., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($num_otorgante) < 6)) {
            throw new \InvalidArgumentException('invalid length for $num_otorgante when calling RequestADG., must be bigger than or equal to 6.');
        }
        if ((!preg_match("/(^[0-9]+)$/", $num_otorgante))) {
            throw new \InvalidArgumentException("invalid value for $num_otorgante when calling RequestADG., must conform to the pattern /(^[0-9]+)$/.");
        }
        $this->container['num_otorgante'] = $num_otorgante;
        return $this;
    }
    
    public function getCuenta()
    {
        return $this->container['cuenta'];
    }
    
    public function setCuenta($cuenta)
    {
        if ((mb_strlen($cuenta) > 25)) {
            throw new \InvalidArgumentException('invalid length for $cuenta when calling RequestADG., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($cuenta) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cuenta when calling RequestADG., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/(^[A-Za-z0-9]+)$/", $cuenta))) {
            throw new \InvalidArgumentException("invalid value for $cuenta when calling RequestADG., must conform to the pattern /(^[A-Za-z0-9]+)$/.");
        }
        $this->container['cuenta'] = $cuenta;
        return $this;
    }
    
    public function getClaveEstado()
    {
        return $this->container['clave_estado'];
    }
    
    public function setClaveEstado($clave_estado)
    {
        $this->container['clave_estado'] = $clave_estado;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        if (!is_null($cp) && (mb_strlen($cp) > 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling RequestADG., must be smaller than or equal to 5.');
        }
        if (!is_null($cp) && (mb_strlen($cp) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling RequestADG., must be bigger than or equal to 5.');
        }
        if (!is_null($cp) && (!preg_match("/(^[0-9]+)$/", $cp))) {
            throw new \InvalidArgumentException("invalid value for $cp when calling RequestADG., must conform to the pattern /(^[0-9]+)$/.");
        }
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        if (!is_null($folio_otorgante) && (mb_strlen($folio_otorgante) > 5)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling RequestADG., must be smaller than or equal to 5.');
        }
        if (!is_null($folio_otorgante) && (mb_strlen($folio_otorgante) < 5)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling RequestADG., must be bigger than or equal to 5.');
        }
        if (!is_null($folio_otorgante) && (!preg_match("/(^[0-9]+)$/", $folio_otorgante))) {
            throw new \InvalidArgumentException("invalid value for $folio_otorgante when calling RequestADG., must conform to the pattern /(^[0-9]+)$/.");
        }
        $this->container['folio_otorgante'] = $folio_otorgante;
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
