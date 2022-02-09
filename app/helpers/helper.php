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

function tampilNilai($id_mapel, $id_siswa){
    $sql = "SELECT * FROM nilai WHERE id_mapel = ".$id_mapel." AND id_siswa = ".$id_siswa;
    $query = mysqli_query(koneksi(),$sql);
    if($pecah = mysqli_fetch_array($query)){
        $dt = $pecah;
    }
    else{
        $dt = '';
    }
    return $dt;
}

// function nilai($id_kelas, $id_mapel){
//     $sql = "SELECT no_absen, nama_siswa, gender, telp_siswa, email_siswa, nilai FROM siswa s, nilai n WHERE s.id_kelas = ".$id_kelas." OR n.id_mapel = ".$id_mapel;
//     $query = mysqli_query(koneksi(),$sql);
//     if($pecah = mysqli_fetch_array($query)){
//         $dt = $pecah;
//     }
//     else{
//         $dt = '';
//     }
//     return $dt;
// }

// SELECT no_absen, nama_siswa, gender, telp_siswa, email_siswa, nilai
// FROM siswa s, nilai n
// WHERE s.id_siswa = n.id_siswa
// AND s.id_kelas = 1000000044
// AND n.id_mapel = 1000000007
