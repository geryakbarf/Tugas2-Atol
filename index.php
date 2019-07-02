<?php
session_start();
if(isset($_SESSION["tugasnip"]))
    header("Location: https://tugas2.geryakbarf.xyz/php/admin-main.php");
?>
<?php include_once("php/function.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 2 - 10117049</title>
    <link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
</head>
<body>

<?php
if(isset($_GET["error"])){
    $error = $_GET["error"];
    if ($error == 1)
        showError("Username dan password tidak sesuai.");
    else if ($error == 2)
        showError("Error database. Silahkan hubungi administrator");
    else if ($error == 3)
        showError("Koneksi ke Database gagal. Autentikasi gagal.");
    else if ($error == 4)
        showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login.
Silahkan login terlebih dahulu.");
    else
        showError("Unknown Error.");
}
?>

<h2>Halaman Login Apotek Sehat Terus</h2>

<form method="post" name="form" action="php/loginProcess.php">
    <div class="imgcontainer">
        <img src="img/teamwork.png" width="200" height="200">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Masukan Username Anda" name="username" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Masukan Password Anda" name="password" required>

        <button type="submit" name="TblLogin">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn" onclick="javascript:history.back()">Kembali</button>
    </div>

</form>

</body>
</html>