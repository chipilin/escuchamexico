<?php
namespace Modules\Dashboard\Controllers;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{
   public function initialize(){
        $this->view->setLayout("index");
    }
}
