<?php
define("DEVELOPMENT",TRUE);
function dbConnect(){
    $db=new mysqli("localhost","geryakba_gery","Bbc089613635834","geryakba_tugas2_apotek");
    return $db;
}

function banner(){
    ?>
    <div id="banner"><h1>PT. Sagala Aya</h1>
    </div>
    <?php
}
function navigator(){
    ?>
    <div id="navigator">
        | <a href="produk.php">Produk</a>
        | <a href="kategori.php">Kategori</a>
        | <a href="pelanggan.php">Pelanggan</a>
        | <a href="pegawai.php">Pegawai</a>
        | <a href="kantor.php">Kantor</a>
        | <a href="pesanan.php">Pesanan</a>
        | <a href="pembayaran.php">Pembayaran</a>
        | <a href="logout.php">Keluar</a>
    </div>
    <?php
}
function showError($message){
    ?>
    <div style="background-color:#FAEBD7;padding:10px;border:1px solid red;margin:15px 0px">
        <?php echo $message;?>
    </div>
    <?php
}
?>