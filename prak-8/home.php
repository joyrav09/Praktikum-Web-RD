<?php
session_start();
if (!isset($_SESSION['userID'])){
    header("Location: index.php");
    die();
}
?>

<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

     <link rel="stylesheet" type="text/css" href="assets/css/style-home.css">
  
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id']; ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2 class="history">History</h2>    
            
            <div id="history_buck"></div>

        </aside>
    </section>

    <script type="text/javascript">
        function histRender() {
            const history_buck = document.getElementById('history_buck')
            let template = ''
            if(localStorage.arrOfHyst !== null){
                let histories = JSON.parse(localStorage.arrOfHyst)

                histories = [...new Set(histories)]

                histories.forEach(item => {
                    const hist = JSON.parse(localStorage.getItem(item))

                    template += `
                        <div style="border:solid 1px gray; margin:2px;padding:7px">
                            <h5 style="margin:0;">${hist.judul}</h5>
                            <p style="margin:0;">${hist.judul}</p>
                        </div>
                    `
                });

                history_buck.innerHTML = template
            }
        }
        histRender()

        function addHist(el){
            const id = el.getAttribute('data-id');
            const judul = el.getElementsByClassName('card-head')[0].innerText
            const isi = el.getElementsByClassName('card-body')[0].innetText

            const hisItem = {
                id: id,
                judul: judul,
                isi: isi
            }

            if (localStorage.getItem('arrOfHyst') !== null) {
                let histories = JSON.parse(localStorage.arrOfHyst)
                histories.push('hyst' + id)
                histories = [...new Set(histories)]

                localStorage.setItem('arrOfHyst', JSON.stringify(histories))
            }else{
                localStorage.setItem('arrOfHyst', JSON.stringify(['hyst' + id]))
            }
        
        localStorage.setItem('hyst' + id, JSON.stringify(hisItem))
        histRender()
    }
    </script>


    <?php
    if(!isset($_COOKIE['tolak']) || $_COOKIE['tolak' !== 'yes']){
        echo '<script src="./assets/iklan/iklan.js"></script>';
    }
    ?>

</body>

</html>