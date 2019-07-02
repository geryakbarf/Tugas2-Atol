<?php
session_start();
if(!isset($_SESSION["tugasnip"]))
    header("Location: https://tugas2.geryakbarf.xyz/index.php?error=4");
?>
<?php include_once("function.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas 2 - 10117049</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
<ul>
    <li><a class="active" href="#home">Daftar Obat</a></li>
    <li><a href="#news">Kategori Obat</a></li>
    <li><a href="#contact">Pegawai</a></li>
    <li style="float:right"><a href="logout.php">Keluar</a></li>
</ul>
<br>
<form name="form" method="post" action="admin-cari.php">
<center><h1>Daftar Obat</h1></center>
<center><input type="text" name="keyword" placeholder="Cari Obat" required>
    <button type="submit" name="cari">Cari</button></center>
<br>
</form>

<?php
    $db=dbConnect();
    if($db->connect_errno==0){
        $sql=" SELECT obat.id, obat.nama_obat, kategori.nama_kate, obat.harga, obat.stok, pengguna.nama 
        FROM obat JOIN kategori ON obat.kategori=kategori.id JOIN pengguna ON obat.pegawai=pengguna.nip";
    }
        $res=$db->query($sql);
        if($res){
            ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nama Obat</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Pegawai</th>
        <th></th>
    </tr>
    <?php
        $data=$res->fetch_all(MYSQLI_ASSOC);
        foreach ($data as $barisdata){
            ?>
        <tr>
            <td><?php echo $barisdata["id"];?></td>
            <td><?php echo $barisdata["nama_obat"];?></td>
            <td><?php echo $barisdata["nama_kate"];?></td>
            <td><?php echo $barisdata["harga"];?></td>
            <td><?php echo $barisdata["stok"];?></td>
            <td><?php echo $barisdata["nama"];?></td>
            <td><a href="#"> Edit</a> | <a href="#"> Hapus </a> </td>
        </tr>
    <?php
        }
        ?>
</table>
<?php
            $res->free();
    }else
            echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";

?>



</body>
</html>
