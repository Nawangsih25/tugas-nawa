<?php
    $dbh = new PDO('mysql:host=localhost;dbname=sekul','root','');

    $query = $dbh->query("select * from siswa");
   
?>

<h1>Data Siswa</h1>

<?php while($result = $query->fetch()){ ?>
        <p><?= $result['nama']; ?>
<?php } ?>