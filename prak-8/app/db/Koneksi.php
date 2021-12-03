<?php
class Koneksi{
    private $dbHost     = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "";
    private $dbName     = "prakweb";

    public function connect(){
        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);

        //Mengecek apakah koneksi antara php dengan mysql berhasil atau tidak
        if ( mysqli_connect_errno() ) {
            printf("Connection failed: %s\ ", mysqli_connect_error());
            exit();
        }
        return $mysqli;
    }
}
?>
