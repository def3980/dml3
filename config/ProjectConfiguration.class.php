<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';

sfCoreAutoload::register();

/**
 * Proyecto generado, configurado e instalado con el nombre:
 * 
 * dml3
 *
 * @author  Oswaldo Rojas <def.3980@gmail.com>
 * @fecha   Martes, 13 Diciembre 2016 23:27:24
 */
class ProjectConfiguration extends sfProjectConfiguration {

    public function setup() {
        // Debido a que este proyecto de modificacion de symfony se realiza en
        // Ecuador se va a poner por default el timezone correspondiente, pero
        // sientete libre de cambiarlo a tu gusto (manualmente) ;-|
        date_default_timezone_set('America/Guayaquil');
        
        // Aqui se ubicaran todos los plugins instalados de forma automatica
        // (desde la linea de comandos) o de manera manual (ctrl + c && ctrl + v)
        $this->enablePlugins('sfDoctrinePlugin');
    }

}