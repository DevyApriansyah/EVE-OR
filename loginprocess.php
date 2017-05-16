<?php
    include "connect.php";
 
    $username = $_POST['name'];
    $password = md5($_POST['password']);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE name ='$username' and password = '$password'");
    $data = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);
        //$row = mysqli_fetch_assoc($query);
 
    //$user = $row['username'];
    //$pass = $row['password'];
    //$type = $row['level'];
 
    if ($data) {
        if($data['level'] == "admin"){
            $_SESSION['admin'] = $data['user_id'];
        ?>
                        <script language="javascript">alert("Login Successful");</script>
                        <script>document.location.href='admin/list.php';</script>
    <?php
}
        if($data['level'] == "committee"){
            $_SESSION['committee'] = $data['user_id'];
        ?>
                        <script language="javascript">alert("Login Successful");</script>
                        <script>document.location.href='login.php';</script>
    <?php
        }
        else if($data['level'] == "company"){
            $_SESSION['company'] = $data['user_id'];
        ?>
            <script language="javascript">alert("Login Successful");</script>
            <script>document.location.href='regist.php';</script>
<?php
        }
    }
        //$row = mysqli_fetch_assoc($query);
        //$_SESSION['id'] = $row['user_id'];
        //$_SESSION['status'] = "User";
        //$_SESSION['name']=$row['name'];
            //  $_SESSION['level'] = $row['level'];
        //if($_SESSION['id'] == "3")
        //{
        //else if($_SESSION['level'] =="1")
        //{
            //<script language="javascript">alert("Login Successful");</script>
        //  <script>document.location.href='regist.php';</script>
        //<script>document.location.href='index.php';</script>-->
    else{
?>
        <script language="javascript">alert("Login Failed");</script>
        <script>document.location.href='login.php';</script>
<?php
    }
    mysqli_close($conn);
?>
