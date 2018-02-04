<?php

namespace App\Models;

class Cliente
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchALL()
    {
        $query = "SELECT * from produtos";
        return $this->db->query($query);
    }
}