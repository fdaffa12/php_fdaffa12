<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Mencari data berdasarkan hobi</h2>
    <form action="soal2b.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>

    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
    ?>


    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Hobi</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $query = mysqli_query($kon,"select * from hobi where hobi like '%".$cari."%'");
        }else{
            $query = mysqli_query($kon, 'SELECT * FROM hobi');     
        }
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['hobi']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>