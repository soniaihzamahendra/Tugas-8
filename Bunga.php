<?php
require_once "Database.php";

class Bunga{

    public $db;

    function __construct(){
        $this->db = new database();
    }

    function getDataB(){
        return $this->db->Select("Bunga");
    }
    
}