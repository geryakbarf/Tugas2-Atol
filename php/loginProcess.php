<?php include_once("function.php");?>
<?php
    $db=dbConnect();
    if($db->connect_errno==0){
    if(isset($_POST["TblLogin"])){
        $username=$db->escape_string($_POST["username"]);
        $password=$db->escape_string($_POST["password"]);
        $sql="SELECT nip,nama,username FROM pengguna WHERE username='$username' AND pass=Password('$password')";
        $res=$db->query($sql);
        if($res){
            if($res->num_rows==1){
                $data=$res->fetch_assoc();
                session_start();
                $_SESSION["tugasnip"]=$data["nip"];
                $_SESSION["tugasnama"]=$data["nama"];
                $_SESSION["tugasusername"]=$data["username"];
                header("Location: https://tugas2.geryakbarf.xyz/php/admin-main.php");
            }
            else
                header("Location: https://tugas2.geryakbarf.xyz/index.php?error=1");
        }
    }
    else
        header("Location: https://tugas2.geryakbarf.xyz/index.php?error=2");
    }
    else
        header("Location: https://tugas2.geryakbarf.xyz/index.php?error=3");
?>

