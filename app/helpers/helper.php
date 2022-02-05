<?php
function koneksi(){
    $koneksi = mysqli_connect('localhost', 'root', '', 'arsipkelas') or die("Unable to connect");;
    return $koneksi;
}

function tampilKehadiran($id_presensi, $id_siswa){
    $sql = "SELECT * FROM kehadiran WHERE id_presensi = ".$id_presensi." AND id_siswa = ".$id_siswa;
    $query = mysqli_query(koneksi(),$sql);
    if($pecah = mysqli_fetch_array($query)){
        $dt = $pecah;
    }
    else{
        $dt = '';
    }
    return $dt;
}

