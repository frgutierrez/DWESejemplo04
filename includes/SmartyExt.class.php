<?php

include 'libs/Smarty.class.php';
//Creamos una clase que extienda a la clase de Smarty
class SmartyExt extends Smarty {
    //Creamos el constructor
    function __construct() {
        //Definimos las carpetas de trabajo de smarty
        parent::__construct();
        $this->setTemplateDir('plantillas/templates');
        $this->setCompileDir('plantillas/templates_c');
        $this->setCacheDir('plantillas/cache');
        $this->setConfigDir('plantillas/configs');
    }
}