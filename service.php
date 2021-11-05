<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];
    
        $query = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama, prodi, angkatan) VALUES('$nim', '$nama', '$prodi', '$angkatan')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $IdMhsw = $_POST['no'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];

        $query = mysqli_query($koneksi, "UPDATE Mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', angkatan='$angkatan' WHERE nim='$nim'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $nim = $_POST['nim'];
        $query = mysqli_query($koneksi, "DELETE FROM Mahasiswa WHERE nim='$nim'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>