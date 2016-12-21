<?php

/**
 * Proyecto generado, configurado e instalado con el nombre:
 * 
 * dml3
 *
 * @author  Oswaldo Rojas <def.3980@gmail.com>
 * @fecha   Martes, 13 Diciembre 2016 17:28:55
 */


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();