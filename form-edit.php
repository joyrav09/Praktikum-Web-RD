<?php
 include "koneksi.php";

 $nim=$_GET['nim'];
 $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa WHERE nim='$nim'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="hidden" name="no" id="no" required="" value="<?php echo $result['no']; ?>" />
                    <input type="text" name="nim" id="nim" required="" value="<?php echo $result['nim']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama" required="" value="<?php echo $result['nama']; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                <select name="prodi" id="prodi" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Teknik Informatika" <?php if($result[ 'prodi']=="Teknik Informatika" ) echo "selected"; ?>>Teknik Informatika</option>
                    <option value="Teknik Mesin" <?php if($result[ 'prodi']=="Teknik Mesin" ) echo "selected"; ?>>Teknik Mesin</option>
                    <option value="Teknik Kelautan"  <?php if($result[ 'prodi']=="Teknik Kelautan" ) echo "selected"; ?>>Teknik Kelautan</option>
                    <option value="Farmasi"  <?php if($result[ 'prodi']=="Farmasi" ) echo "selected"; ?>>Farmasi</option>
                    <option value="Matematika"  <?php if($result[ 'prodi']=="Matematika" ) echo "selected"; ?>>Matematika</option>
                    <option value="Teknik Elektro"  <?php if($result[ 'prodi']=="Teknik Elektro" ) echo "selected"; ?>>Teknik Elektro</option>
                    <option value="Lain-lain"  <?php if($result[ 'prodi']=="Lain-lain" ) echo "selected"; ?>>Lain-lain</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>
                     <input type="text" name="angkatan" id="angkatan" required="" value="<?php echo $result['angkatan']; ?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>