<?php
session_start();
if(isset($_POST['submit'])){
    if($_SESSION['captcha']==$_POST['captcha1']) {
//        jika kode captcha benar
?>
        <script language="javascript">alert("Kode Captcha Benar");</script>
    		<script>document.location.href='tampilan_awal_acara/awal.php';</script>
<?php
    }
    else{
//        jika kode captcha salah
?>
        <script language="javascript">alert("Kode Captcha Salah");</script>
        <script>document.location.href='formulir.php';</script>
<?php
    }
}
else{
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Captcha Verification</title>
    </head>
    <body>
        <form method="post" action="formulir.php">
            <table>
                <td>
                    <tr valign="top">
                      <h1>Captcha Verification</h1>
                      <h3>Please Re-type The Captcha if you not a robot</h3>
                    </tr>
                    <td>
                        <img src="captcha_image.php" alt="captcha"/><br/>
                        <input type="text" name="captcha1" placeholder="Re-type the Captcha here" maxlength="6"/>
                        <input type="submit" name="submit" value="Submit"/>
                    </td>
                </td>
            </table>
        </form>
    </body>
</html>
<?php
};
?>
