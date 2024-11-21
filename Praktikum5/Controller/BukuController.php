<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{
    public function jalankan(){
        $dataModel = new DaftarBukuModel();

        //menggunkan model
        $dataModel = new DaftarBukuModel();

        //mengirim dataModel ke BukuView dan menampilkannya
        include "View/BukuView.php";
    }
}