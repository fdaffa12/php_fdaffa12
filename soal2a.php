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
    <h2>Menampilkan Data Dari Database Berdasarkan Hobi Terbanyak</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Jumlah Person</td>
                <td>Hobi</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM hobi ORDER BY person_id DESC');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['person_id'] ?></td>
                <td><?php echo $data['hobi'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>