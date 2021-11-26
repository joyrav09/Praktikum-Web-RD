<!DOCTYPE html>
<html>

<head>
    <title>Tugas Praktikum 7</title>

    <title>Etiket</title>
 <!-- require meta tags -->
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shink-to-fit-no">

  <title>Etiket</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="style.css">

    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            //load data mahasiswa saat aplikasi dijalankan 
            loadData();

            //Load form edit dengan parameter nim
            $("#contentData").on("click", "#EditButton", function() {
                var nim = $(this).attr("value");
                $.ajax({
                    url: 'form-edit.php',
                    type: 'get',
                    data: {
                        nim: nim
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            //simpan data mahasiswa
            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //edit data mahasiswa
            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //hapus data mahasiswa berdasarkan nim
            $("#contentData").on("click", "#DeleteButton", function() {
                var nim = $(this).attr("value");
                $.ajax({
                    url: 'service.php?action=delete',
                    type: 'post',
                    data: {
                        nim: nim
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data-mahasiswa.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>
</head>

<body>
    <div align="center">
        <div id="contentData"></div>
    </div>
</body>

</html>