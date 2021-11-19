<?php


class DataBase{
    // Membuat method di dalam class untuk menghubungkan pada DB
    function koneksi(){
        $HOST = 'localhost';
        $USER = 'root';
        $PASS = '';
        $DB = 'akademik';
        $koneksi = mysqli_connect($HOST,$USER,$PASS,$DB);
        if(mysqli_connect_errno()){
            echo 'koneksi gagal : '. mysqli_connect_error();
        } else{
            $this -> konek = $koneksi;
            return $this->konek;
        }
    }

    // Mendapatkan semua data
    function getAll($tabel){
        $query = "SELECT * FROM ".$tabel;
        $exec = mysqli_query($this->konek, $query);
        $data = [];
        while($rows = mysqli_fetch_object($exec)){
            $data[] = $rows;
        }
        return $data;
    }
}

$db = new DataBase;
$db->koneksi();
// print_r($db->getAll('mhs'));
foreach($db->getAll('mhs') as $k=>$v){
    echo $v->nama;
    echo '<br>';
}