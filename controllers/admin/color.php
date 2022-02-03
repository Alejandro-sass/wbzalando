<?php
include("curlController.php");
include("logger.php");
use Clases\CurlController;

class ColorController extends ModuleAdminController{

    private $id_idioma;

    public function __construct()
    {
        parent::__construct();
        $this->bootstrap = true;
        $this->id_idioma = $this->context->language->id;
    }

    public function init()
    {
        parent::init();
    }

    public function initContent(){
        parent::initContent();
        $linkDeControlador=$this->context->link->getAdminLink("Color",true);
        $variablesSmarty=[
            "linkControlador" => $linkDeControlador,
        ];
        $this->context->smarty->assign($variablesSmarty);
        $this->setTemplate('/asociacion_color/vista.tpl');
    }


}




?>