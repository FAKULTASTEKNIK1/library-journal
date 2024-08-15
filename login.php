<?php
if (isset($_GET['pesan']))
{
    $pesan=$_GET['pesan'];
}
else{
    $pesan="";
}
?>
<html>
    <body>
        <h1>LOG IN</h1>
        <?php
            if ($pesan=="kesalahan"){
            echo "username atau password salah";
        }
        ?>
        <form action="login_cek.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button type="sumbit">Masuk</button>
        </form>
    </body>
</html>
