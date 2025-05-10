<?php

class Database{
    public $mysqli;


    function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "db_bunga");
        // echo "koneksi berhasil";
    }

    function Select($table){
        $sql = ("SELECT * FROM $table"); 
        $result = $this->mysqli->query($sql); 
        return $result;
    }
}