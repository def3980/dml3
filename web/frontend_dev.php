<?php

/**
 * Proyecto generado, configurado e instalado con el nombre:
 * 
 * dml3
 *
 * @author  Oswaldo Rojas <def.3980@gmail.com>
 * @fecha   Martes, 13 Diciembre 2016 17:28:55
 */

// Esta comprobacion impide el acceso a los controladores frontales de depuracion que se 
// despliegan por accidente a los servidores de produccion.
// Sientete libre de suprimir esta comprobacion, extenderlo o hacer algo mas sofisticado.
if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
    die('No esta permitido acceder a este archivo. Revisa el archivo '.basename(__FILE__).' para mas informacion.');
}

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
sfContext::createInstance($configuration)->dispatch();