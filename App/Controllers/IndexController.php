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
                       
        $cliente = Container::getModel("Cliente");        
        $this->view->clientes = $cliente->fetchALL();

        $this->render("index");

    }

    public function contato()
    {
        $cliente = Container::getModel("Cliente");        
        $this->view->clientes = $cliente->find(2);

        $this->render("contato",false);        
    }
  

    

}