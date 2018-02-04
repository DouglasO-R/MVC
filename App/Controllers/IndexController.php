<?php

namespace App\Controllers;

use App\Conn;
use App\Models\Cliente;
use SON\Controller\Action;
use SON\DI\Container;


class IndexController extends Action
{
    

    public function index()
    {
        //$this->view->cars = array("punto","civic");

        
        $db = new Conn();
        
        $clientes = new Cliente($db->getDb());

        //$cliente = Container::getModel("Cliente");
        
        $this->view->clientes = $cliente->fetchALL();

        $this->render("index");

    }

    public function contato()
    {
        $this->view->cars = array("punto","civic");
        $this->render("contato",false);        
    }
  

    

}