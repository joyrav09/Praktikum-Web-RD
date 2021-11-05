<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="text" name="nim" id="nim" required="" />
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" id="nama" required="" />
            </td>
        </tr>
        <tr>
             <tr>
            <td>Prodi</td>
            <td>
                <select name="prodi" id="prodi" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Kelautan">Teknik Kelautan</option>
                    <option value="Farmasi">Farmasi</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select>
            </td>
        </tr>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>
                <input type="text" name="angkatan" id="angkatan" required="" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>


<br>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa ORDER BY nim ASC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['nim']; ?>
                </td>
                <td>
                    <?php echo $result['nama']; ?>
                </td>
                <td>
                    <?php echo $result['prodi']; ?>
                </td>
                <td>
                    <?php echo $result['angkatan']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['nim']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['nim']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>