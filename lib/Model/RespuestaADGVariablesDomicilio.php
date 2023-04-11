<?php

namespace ActualizaDatosGenerales\Client\Model;

use \ArrayAccess;
use \ActualizaDatosGenerales\Client\ObjectSerializer;

class RespuestaADGVariablesDomicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RespuestaADG_VariablesDomicilio';
    
    protected static $apihubTypes = [
        'numero_cuenta' => 'string',
        'folio_domicilio' => 'string',
        'fecha_ultima_consulta' => 'string',
        'num_creditos' => 'string',
        'num_creditos_tres_meses' => 'string',
        'num_creditos_tres_meses_nos' => 'string',
        'otorgantes_consulta' => 'string',
        'otorgantes_consulta_tres_meses' => 'string',
        'otorgantes_carga' => 'string',
        'otorgantes_carga_tres_meses' => 'string',
        'otorgantes_carga_tres_meses_nos' => 'string',
        'servicio_carga' => 'string',
        'servicio_carga_tres_meses' => 'string',
        'servicio_consulta' => 'string',
        'servicio_consulta_tres_meses' => 'string',
        'num_miembros' => 'string',
        'miembros_credito' => 'string',
        'miembros_credito_s' => 'string',
        'miembros_credito_nos' => 'string',
        'miembros_consulta' => 'string',
        'miembros_consulta_tres_meses' => 'string',
        'calif' => 'string'
    ];
    
    protected static $apihubFormats = [
        'numero_cuenta' => null,
        'folio_domicilio' => null,
        'fecha_ultima_consulta' => null,
        'num_creditos' => null,
        'num_creditos_tres_meses' => null,
        'num_creditos_tres_meses_nos' => null,
        'otorgantes_consulta' => null,
        'otorgantes_consulta_tres_meses' => null,
        'otorgantes_carga' => null,
        'otorgantes_carga_tres_meses' => null,
        'otorgantes_carga_tres_meses_nos' => null,
        'servicio_carga' => null,
        'servicio_carga_tres_meses' => null,
        'servicio_consulta' => null,
        'servicio_consulta_tres_meses' => null,
        'num_miembros' => null,
        'miembros_credito' => null,
        'miembros_credito_s' => null,
        'miembros_credito_nos' => null,
        'miembros_consulta' => null,
        'miembros_consulta_tres_meses' => null,
        'calif' => null
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
        'folio_domicilio' => 'folioDomicilio',
        'fecha_ultima_consulta' => 'fechaUltimaConsulta',
        'num_creditos' => 'numCreditos',
        'num_creditos_tres_meses' => 'numCreditosTresMeses',
        'num_creditos_tres_meses_nos' => 'numCreditosTresMesesNos',
        'otorgantes_consulta' => 'otorgantesConsulta',
        'otorgantes_consulta_tres_meses' => 'otorgantesConsultaTresMeses',
        'otorgantes_carga' => 'otorgantesCarga',
        'otorgantes_carga_tres_meses' => 'otorgantesCargaTresMeses',
        'otorgantes_carga_tres_meses_nos' => 'otorgantesCargaTresMesesNos',
        'servicio_carga' => 'servicioCarga',
        'servicio_carga_tres_meses' => 'servicioCargaTresMeses',
        'servicio_consulta' => 'servicioConsulta',
        'servicio_consulta_tres_meses' => 'servicioConsultaTresMeses',
        'num_miembros' => 'numMiembros',
        'miembros_credito' => 'miembrosCredito',
        'miembros_credito_s' => 'miembrosCreditoS',
        'miembros_credito_nos' => 'miembrosCreditoNos',
        'miembros_consulta' => 'miembrosConsulta',
        'miembros_consulta_tres_meses' => 'miembrosConsultaTresMeses',
        'calif' => 'calif'
    ];
    
    protected static $setters = [
        'numero_cuenta' => 'setNumeroCuenta',
        'folio_domicilio' => 'setFolioDomicilio',
        'fecha_ultima_consulta' => 'setFechaUltimaConsulta',
        'num_creditos' => 'setNumCreditos',
        'num_creditos_tres_meses' => 'setNumCreditosTresMeses',
        'num_creditos_tres_meses_nos' => 'setNumCreditosTresMesesNos',
        'otorgantes_consulta' => 'setOtorgantesConsulta',
        'otorgantes_consulta_tres_meses' => 'setOtorgantesConsultaTresMeses',
        'otorgantes_carga' => 'setOtorgantesCarga',
        'otorgantes_carga_tres_meses' => 'setOtorgantesCargaTresMeses',
        'otorgantes_carga_tres_meses_nos' => 'setOtorgantesCargaTresMesesNos',
        'servicio_carga' => 'setServicioCarga',
        'servicio_carga_tres_meses' => 'setServicioCargaTresMeses',
        'servicio_consulta' => 'setServicioConsulta',
        'servicio_consulta_tres_meses' => 'setServicioConsultaTresMeses',
        'num_miembros' => 'setNumMiembros',
        'miembros_credito' => 'setMiembrosCredito',
        'miembros_credito_s' => 'setMiembrosCreditoS',
        'miembros_credito_nos' => 'setMiembrosCreditoNos',
        'miembros_consulta' => 'setMiembrosConsulta',
        'miembros_consulta_tres_meses' => 'setMiembrosConsultaTresMeses',
        'calif' => 'setCalif'
    ];
    
    protected static $getters = [
        'numero_cuenta' => 'getNumeroCuenta',
        'folio_domicilio' => 'getFolioDomicilio',
        'fecha_ultima_consulta' => 'getFechaUltimaConsulta',
        'num_creditos' => 'getNumCreditos',
        'num_creditos_tres_meses' => 'getNumCreditosTresMeses',
        'num_creditos_tres_meses_nos' => 'getNumCreditosTresMesesNos',
        'otorgantes_consulta' => 'getOtorgantesConsulta',
        'otorgantes_consulta_tres_meses' => 'getOtorgantesConsultaTresMeses',
        'otorgantes_carga' => 'getOtorgantesCarga',
        'otorgantes_carga_tres_meses' => 'getOtorgantesCargaTresMeses',
        'otorgantes_carga_tres_meses_nos' => 'getOtorgantesCargaTresMesesNos',
        'servicio_carga' => 'getServicioCarga',
        'servicio_carga_tres_meses' => 'getServicioCargaTresMeses',
        'servicio_consulta' => 'getServicioConsulta',
        'servicio_consulta_tres_meses' => 'getServicioConsultaTresMeses',
        'num_miembros' => 'getNumMiembros',
        'miembros_credito' => 'getMiembrosCredito',
        'miembros_credito_s' => 'getMiembrosCreditoS',
        'miembros_credito_nos' => 'getMiembrosCreditoNos',
        'miembros_consulta' => 'getMiembrosConsulta',
        'miembros_consulta_tres_meses' => 'getMiembrosConsultaTresMeses',
        'calif' => 'getCalif'
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
        $this->container['folio_domicilio'] = isset($data['folio_domicilio']) ? $data['folio_domicilio'] : null;
        $this->container['fecha_ultima_consulta'] = isset($data['fecha_ultima_consulta']) ? $data['fecha_ultima_consulta'] : null;
        $this->container['num_creditos'] = isset($data['num_creditos']) ? $data['num_creditos'] : null;
        $this->container['num_creditos_tres_meses'] = isset($data['num_creditos_tres_meses']) ? $data['num_creditos_tres_meses'] : null;
        $this->container['num_creditos_tres_meses_nos'] = isset($data['num_creditos_tres_meses_nos']) ? $data['num_creditos_tres_meses_nos'] : null;
        $this->container['otorgantes_consulta'] = isset($data['otorgantes_consulta']) ? $data['otorgantes_consulta'] : null;
        $this->container['otorgantes_consulta_tres_meses'] = isset($data['otorgantes_consulta_tres_meses']) ? $data['otorgantes_consulta_tres_meses'] : null;
        $this->container['otorgantes_carga'] = isset($data['otorgantes_carga']) ? $data['otorgantes_carga'] : null;
        $this->container['otorgantes_carga_tres_meses'] = isset($data['otorgantes_carga_tres_meses']) ? $data['otorgantes_carga_tres_meses'] : null;
        $this->container['otorgantes_carga_tres_meses_nos'] = isset($data['otorgantes_carga_tres_meses_nos']) ? $data['otorgantes_carga_tres_meses_nos'] : null;
        $this->container['servicio_carga'] = isset($data['servicio_carga']) ? $data['servicio_carga'] : null;
        $this->container['servicio_carga_tres_meses'] = isset($data['servicio_carga_tres_meses']) ? $data['servicio_carga_tres_meses'] : null;
        $this->container['servicio_consulta'] = isset($data['servicio_consulta']) ? $data['servicio_consulta'] : null;
        $this->container['servicio_consulta_tres_meses'] = isset($data['servicio_consulta_tres_meses']) ? $data['servicio_consulta_tres_meses'] : null;
        $this->container['num_miembros'] = isset($data['num_miembros']) ? $data['num_miembros'] : null;
        $this->container['miembros_credito'] = isset($data['miembros_credito']) ? $data['miembros_credito'] : null;
        $this->container['miembros_credito_s'] = isset($data['miembros_credito_s']) ? $data['miembros_credito_s'] : null;
        $this->container['miembros_credito_nos'] = isset($data['miembros_credito_nos']) ? $data['miembros_credito_nos'] : null;
        $this->container['miembros_consulta'] = isset($data['miembros_consulta']) ? $data['miembros_consulta'] : null;
        $this->container['miembros_consulta_tres_meses'] = isset($data['miembros_consulta_tres_meses']) ? $data['miembros_consulta_tres_meses'] : null;
        $this->container['calif'] = isset($data['calif']) ? $data['calif'] : null;
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
    
    public function getFolioDomicilio()
    {
        return $this->container['folio_domicilio'];
    }
    
    public function setFolioDomicilio($folio_domicilio)
    {
        $this->container['folio_domicilio'] = $folio_domicilio;
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
    
    public function getNumCreditos()
    {
        return $this->container['num_creditos'];
    }
    
    public function setNumCreditos($num_creditos)
    {
        $this->container['num_creditos'] = $num_creditos;
        return $this;
    }
    
    public function getNumCreditosTresMeses()
    {
        return $this->container['num_creditos_tres_meses'];
    }
    
    public function setNumCreditosTresMeses($num_creditos_tres_meses)
    {
        $this->container['num_creditos_tres_meses'] = $num_creditos_tres_meses;
        return $this;
    }
    
    public function getNumCreditosTresMesesNos()
    {
        return $this->container['num_creditos_tres_meses_nos'];
    }
    
    public function setNumCreditosTresMesesNos($num_creditos_tres_meses_nos)
    {
        $this->container['num_creditos_tres_meses_nos'] = $num_creditos_tres_meses_nos;
        return $this;
    }
    
    public function getOtorgantesConsulta()
    {
        return $this->container['otorgantes_consulta'];
    }
    
    public function setOtorgantesConsulta($otorgantes_consulta)
    {
        $this->container['otorgantes_consulta'] = $otorgantes_consulta;
        return $this;
    }
    
    public function getOtorgantesConsultaTresMeses()
    {
        return $this->container['otorgantes_consulta_tres_meses'];
    }
    
    public function setOtorgantesConsultaTresMeses($otorgantes_consulta_tres_meses)
    {
        $this->container['otorgantes_consulta_tres_meses'] = $otorgantes_consulta_tres_meses;
        return $this;
    }
    
    public function getOtorgantesCarga()
    {
        return $this->container['otorgantes_carga'];
    }
    
    public function setOtorgantesCarga($otorgantes_carga)
    {
        $this->container['otorgantes_carga'] = $otorgantes_carga;
        return $this;
    }
    
    public function getOtorgantesCargaTresMeses()
    {
        return $this->container['otorgantes_carga_tres_meses'];
    }
    
    public function setOtorgantesCargaTresMeses($otorgantes_carga_tres_meses)
    {
        $this->container['otorgantes_carga_tres_meses'] = $otorgantes_carga_tres_meses;
        return $this;
    }
    
    public function getOtorgantesCargaTresMesesNos()
    {
        return $this->container['otorgantes_carga_tres_meses_nos'];
    }
    
    public function setOtorgantesCargaTresMesesNos($otorgantes_carga_tres_meses_nos)
    {
        $this->container['otorgantes_carga_tres_meses_nos'] = $otorgantes_carga_tres_meses_nos;
        return $this;
    }
    
    public function getServicioCarga()
    {
        return $this->container['servicio_carga'];
    }
    
    public function setServicioCarga($servicio_carga)
    {
        $this->container['servicio_carga'] = $servicio_carga;
        return $this;
    }
    
    public function getServicioCargaTresMeses()
    {
        return $this->container['servicio_carga_tres_meses'];
    }
    
    public function setServicioCargaTresMeses($servicio_carga_tres_meses)
    {
        $this->container['servicio_carga_tres_meses'] = $servicio_carga_tres_meses;
        return $this;
    }
    
    public function getServicioConsulta()
    {
        return $this->container['servicio_consulta'];
    }
    
    public function setServicioConsulta($servicio_consulta)
    {
        $this->container['servicio_consulta'] = $servicio_consulta;
        return $this;
    }
    
    public function getServicioConsultaTresMeses()
    {
        return $this->container['servicio_consulta_tres_meses'];
    }
    
    public function setServicioConsultaTresMeses($servicio_consulta_tres_meses)
    {
        $this->container['servicio_consulta_tres_meses'] = $servicio_consulta_tres_meses;
        return $this;
    }
    
    public function getNumMiembros()
    {
        return $this->container['num_miembros'];
    }
    
    public function setNumMiembros($num_miembros)
    {
        $this->container['num_miembros'] = $num_miembros;
        return $this;
    }
    
    public function getMiembrosCredito()
    {
        return $this->container['miembros_credito'];
    }
    
    public function setMiembrosCredito($miembros_credito)
    {
        $this->container['miembros_credito'] = $miembros_credito;
        return $this;
    }
    
    public function getMiembrosCreditoS()
    {
        return $this->container['miembros_credito_s'];
    }
    
    public function setMiembrosCreditoS($miembros_credito_s)
    {
        $this->container['miembros_credito_s'] = $miembros_credito_s;
        return $this;
    }
    
    public function getMiembrosCreditoNos()
    {
        return $this->container['miembros_credito_nos'];
    }
    
    public function setMiembrosCreditoNos($miembros_credito_nos)
    {
        $this->container['miembros_credito_nos'] = $miembros_credito_nos;
        return $this;
    }
    
    public function getMiembrosConsulta()
    {
        return $this->container['miembros_consulta'];
    }
    
    public function setMiembrosConsulta($miembros_consulta)
    {
        $this->container['miembros_consulta'] = $miembros_consulta;
        return $this;
    }
    
    public function getMiembrosConsultaTresMeses()
    {
        return $this->container['miembros_consulta_tres_meses'];
    }
    
    public function setMiembrosConsultaTresMeses($miembros_consulta_tres_meses)
    {
        $this->container['miembros_consulta_tres_meses'] = $miembros_consulta_tres_meses;
        return $this;
    }
    
    public function getCalif()
    {
        return $this->container['calif'];
    }
    
    public function setCalif($calif)
    {
        $this->container['calif'] = $calif;
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
