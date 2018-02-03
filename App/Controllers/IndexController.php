<?php

namespace App\Controllers;

use SON\Controller\Action;

class IndexController extends Action
{
    

    public function index()
    {
        $this->view->cars = array("punto","civic");
        $this->render("index");

    }

    public function contato()
    {
        $this->view->cars = array("punto","civic");
        $this->render("contato",false);        
    }
  

    

}