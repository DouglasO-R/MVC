<?php

namespace App;

class Conn
{
    public function getDb()
    {

        try{

            return new \PDO("mysql:host=localhost;dbname=test","root","123456");
           
        } catch(\PDOException $e) 
        {
            echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
        }
        
    }
}