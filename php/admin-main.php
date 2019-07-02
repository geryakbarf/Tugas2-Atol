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

<?php

?>

</body>
</html>
