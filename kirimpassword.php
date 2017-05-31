<?php

include "connect.php";

$username = $_POST['username'];

function randomPassword()
{
// function untuk membuat password random 6 digit karakter

$digit = 6;
$karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

srand((double)microtime()*1000000);
$i = 0;
$pass = "";
while ($i <= $digit-1)
{
$num = rand() % 32;
$tmp = substr($karakter,$num,1);
$pass = $pass.$tmp;
$i++;
}
return $pass;
}

// membuat password baru secara random -> memanggil function randomPassword
$newPassword = randomPassword();

// perlu dibuat sebarang pengacak
$pengacak  = "NDJS3289JSKS190JISJI";

// mengenkripsi password dengan md5() dan pengacak
$newPasswordEnkrip = md5($pengacak . md5($newPassword) . $pengacak);

// mencari alamat email si user
$query = mysqli_query($conn, "SELECT * FROM user WHERE name = '$username'");
$data  = mysqli_fetch_array($query);
$alamatEmail = $data['email'];

// title atau subject email
$title  = "New Password";

// isi pesan email disertai password
$pesan  = "Username Anda : ".$username.". \nPassword Anda yang baru adalah ".$newPassword;

// header email berisi alamat pengirim
$header = "From: luthfijojow@gmail.com\n";

//ini_set(sendmail_from,'luthfijojow@gmail.com');

// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
//ini_restore(sendmail_from); 

// cek status pengiriman email
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $hasil = mysqli_query($conn, "UPDATE user SET password = '$newPasswordEnkrip' WHERE name = '$username'");
    //$hasil = mysqli_query($query);

    if ($hasil) echo "Password baru telah direset dan sudah dikirim ke email Anda";
    }
else echo "Pengiriman password baru ke email gagal";

?>
