<?php

/**
 * Proyecto generado, configurado e instalado con el nombre:
 * 
 * dml3
 *
 * @author  Oswaldo Rojas <def.3980@gmail.com>
 * @fecha   Martes, 13 Diciembre 2016 23:27:24
 * 
 * http://symfony.com/legacy/doc/more-with-symfony/1_4/es/13-leveraging-the-power-of-the-command-line
 */
class dml3SaludosTask extends sfBaseTask {

    /**
     * @see sfTask
     */
    protected function configure() {
        // agregar tus propios argumentos aqui
        $this->addArgument('who', sfCommandArgument::OPTIONAL, 'A quien quieres saludar?', 'Mundo');

        // agregar tus propias opciones aqui
        //$this->addOptions(array(
        //    new sfCommandOption('mi_opcion', null, sfCommandOption::PARAMETER_REQUIRED, 'Mi opcion'),
        //));

        $this->namespace           = 'say';
        $this->name                = 'hello';
        $this->briefDescription    = 'Hola Mundo sencillo'; 
        $this->detailedDescription = <<<EOF
La tarea [say:hello|INFO] es una implementacion del clasico ejemplo
Hola Mundo utilizando el sistema de tareas de Symfony.

  [./symfony say:hello|INFO]

Puedes utilizar esta misma tarea para saludar a alguien mediante el
argumento [--who|COMMENT].
EOF;
    }

    /**
     * @see sfTask
     */
    protected function execute($arguments = array(), $options = array()) {
        // agregar tu codigo aqui
        $this->logSection(
            'task', 
            sprintf('Hola "%s", ya has generado un proyecto symfony 1.4.20', $arguments['who'])
        );
    }

}