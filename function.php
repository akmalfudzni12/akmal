<?php
session_start();
$conn = mysqli_connect("localhost","root","","stockbarang");


if(isset($_POST['addnewbarang'])){
    $kampus = $_POST['kampus'];
    $daerah = $_POST['daerah'];
    $keterangan =$_POST['keterangan'];

    $addtotable = mysqli_query($conn,"insert into stock (kampus, daerah, keterangan) values('$kampus','$daerah','$keterangan')");
    if($addtotable){
        header('location:masuk.php');
    }
    else{
        echo 'gagal';
        header('location:login.php');
    }
};
session_start();
if(isset($_POST['addnewkomentar'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $komentar =$_POST['komentar'];

    $addtotable = mysqli_query($conn,"insert into keluar(nama, komentar) values('$nama','$komentar')");
    if($addtotable){
        header('location:keluar.php');
    }
    else{
        echo 'gagal';
        header('location:keluar.php');
    }
};






?>