<?php
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $Tbel = "TBUSER";
        $sql = "CREATE TABLE $Tbel(

            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            nama VARCHAR (20) NOT NULL,
            email VARCHAR (255) NOT NULL,
            username VARCHAR (20),
            passkey VARCHAR (255),
            iduser VARCHAR (255)
        )" ;
        $hasil = mysqli_query ($cnn, $sql );
        if($hasil){
            echo "Pembuatan Tabel" . $Tbel . "Sukses";

        }else{
            echo "Pembuatan Tabel" . $Tbel . "Gagal";
        }


    }else{
        echo "Koneksi ke MYSQL gagal";
    }