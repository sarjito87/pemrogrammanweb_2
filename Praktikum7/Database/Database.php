<?php

class Database{
    private $host = "localhost";
    private $username = "ADJISARJITO";
    private $password = "300805";
    private $databaseName = "perpustakaan";
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username,
        $this->password, $this->databaseName);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
}