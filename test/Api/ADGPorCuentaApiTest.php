<?php

namespace ActualizaDatosGenerales\Client;

use \ActualizaDatosGenerales\Client\Configuration;
use \ActualizaDatosGenerales\Client\ApiException;
use \ActualizaDatosGenerales\Client\ObjectSerializer;

use \ActualizaDatosGenerales\Client\Model\RequestADG;
use \ActualizaDatosGenerales\Client\Model\CatalogoEstados;


class ADGPorCuentaApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new \ActualizaDatosGenerales\Client\Configuration();
        $config->setHost('https://services.circulodecredito.com.mx/v1/adg');
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \ActualizaDatosGenerales\Client\Interceptor\KeyHandler(    null,   null, $password);
        $events = new \ActualizaDatosGenerales\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \ActualizaDatosGenerales\Client\Api\ADGPorCuentaApi($client, $config);
        $this->x_api_key = "x_api_key";
        $this->username = "username";
        $this->password = "password";

    }    
    
    public function testPorCuentaPost()
    {
        $estado = new CatalogoEstados();
        $requestBody = new RequestADG();
   
        $requestBody->setClaveEstado($estado::DGO);
        $requestBody->setNumOtorgante("000000");
        $requestBody->setCuenta("000000");
        $requestBody->setCp("00000");
        $requestBody->setFolioOtorgante("33333");
                
        try {
            $result = $this->apiInstance->porCuentaPost($this->x_api_key, $this->username, $this->password, $requestBody);
            print_r($result);
            $this->assertTrue($result->getFolioConsulta()!==null);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetScoreNoHitDG: ', $e->getMessage(), PHP_EOL;
        }
    } 
    
}
