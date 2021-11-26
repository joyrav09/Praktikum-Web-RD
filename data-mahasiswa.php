<!-- NAVBAR -->
<div class="nav-title">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="">E-Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="navbar-info">
                <ul style="margin-top: 30px;">
                    <li><a href="">BERANDA</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="menu">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="">LOGIN<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="">DAFTAR</a>
                </div>
            </div>
        </div>
    </nav>

     <!-- end navbar -->

    <div class="title">
            <h1 class="">Data Mahasiswa</h1>
    </div>
</div>
 


 <!-- CONTAINER -->
 <div class="container">
 
 <!-- INFO PANEL -->
 
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
            <form method="POST" id="formAdd">
                <table>
                    <div class="form-data">
                        <ul>
                            <li><label>NIM      : </label> <input type="text" name="nim" id="nim" required="" /></li>
                            <li><label>Nama     : </label> <input type="text" name="nama" id="nama" required="" /></li>
                        </ul>
                    <br>
                        <ul>   
                            <li><label>Prodi    : </label>
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
                            </li>
                
                            <li><label>Angkatan : </label> <input type="text" name="angkatan" id="angkatan" required="" /></li>
                
                        </ul>
                    </div>
                    <tr class="submit-data">
                        <td>
                            <button type="submit" name="simpan" id="simpan" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-danger" id="cancelButton">Batal</button>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
            <br>
        
            <div class="row">
                <table class="table table-dark table-hover" border="1">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Prodi</th>
                          <th scope="col">Angkatan</th>
                          <th scope="col">Aksi</th>
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
                                    <button class="btn btn-primary" id="EditButton" value="<?php echo $result['nim']; ?>">Edit</button>
                                    <button class="btn btn-danger" id="DeleteButton" value="<?php echo $result['nim']; ?>">Delete</button>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
       </div>
    </div>
 

 <!-- DESKRIPSI -->
 
    <div class="deskripsi">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
 <!-- end deskripsi -->


 <!-- FOOTER -->
    <div class="row footer">
        <div class="col text-center text-capitalize">
            <p>&copy;2021 all rights reserved by Joy Ravelo </p>
        </div>
    </div>

</div>
 <!-- end container -->



 <!-- optional javascript -->
 <!--jquery, pooper.js, bootstrap.js-->
 <script src="jquery/3.3.1.js"></script>
 <script src="bootstrap/assets/js/vendor/popper.min.js"></script>
 <script src="bootstrap/dist/js/bootstrap.js"></script>


