<?php
    if(isset($_POST['submit'])) {
 
        //define('ROOT', 'http://localhost/septian/tes/untuk_blog/v_email/');
        //$koneksi=mysql_connect('localhost','root','');
        //mysql_select_db('untuk_blog',$koneksi);
		include "connect.php"
 
        $kode   = md5(uniqid(rand()));
        $password = md5($_POST['password']);
 
        $query = mysql_query("INSERT INTO verifikasi_email (id, username, password, email, aktif, kode) VALUES ('', '$_POST[username]', '$password', '$_POST[email]','T', '$kode' )") or die (mysql_error());
 
        $to     = $_POST['email'];
        $judul  = "Aktivasi Akun Anda";
        $dari   = "From: septian@tian.com \n";
        $dari   .= "Content-type: text/html \r\n";
 
        $pesan  = "Klik link berikut untuk mengaktifkan akun: <br />";
        $pesan  .= "<a href='".ROOT."konfirm.php?email=".$_POST['email']."&kode=$kode&username=".$_POST['username']."'>".ROOT."konfirm.php?email=".$_POST['email']."&kode=$kode</a>";
 
        $kirim  = mail($to, $judul, $pesan, $dari);
 
        if($kirim AND $query)
        {
            echo "<p class=info>Berhasil Dikirim</p>";
        }
        else
        {
            echo "<p class=infoGagal>Gagal Dikirim</p>";
        }
 
    }
?>
