<?php
  include "../connect.php";
  if (isset($_SESSION['committee'])){
    $committee = $_SESSION['committee'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Homepage | EVE-OR</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>

	<body>
		<!-- container -->
			<!-- header -->
      <?php
      $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $committee");
    	$data = mysqli_fetch_array($query);
      ?>
			<div class="header">
				<!-- logo -->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="baku" /></a>
				</div>
				<!-- logo -->

				<!-- cart-info -->
				<div class="container">
				<div class="cart-info">
					<ul>
						<li class="dropdown"><a href="../tampilan_acara_liat_profile/index.php"><?php echo $data['name']; ?></a>
							<div class="dropdown-content">
							<a href="../tampilan_acara_liat_profile/index.php">View Profile</a> <br>
							<a href="../logoutproses.php">Logout</a> <br>
							</div>
						</li>

						<li><a href="../tampilan_awal_acara/sponsor.php">Find Sponsor</a></li>

						<li><a href="#">Notifikasi</a></li>

						<li><a href="../tampilan_awal_acara/awal.php">Home</a></li>
					</ul>
				</div>


				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
				<!-- script-for-nav -->

        <!-- search-form -->
				<div class="search-form">
					<form align="center" action="../searching func./list_company.php" method="get">
						<input type="text" name="keyword" value="Keyword or product code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword or product code';}">
						<input type="submit" value="" />
					</form>
				</div>
				<div class="clearfix"> </div>
				<!-- /search-form -->

				<!-- /cart-info -->
				</div>
				<!-- header -->
			</div>

		<!-- iteam-grids -->
		<div class="collections">
		<div class="iteam-grids">
					<div class="container">
						<?php
                $queryyy = mysqli_query($conn, "SELECT * FROM user WHERE level='company'");
                while($result = mysqli_fetch_array($queryyy)){
                  echo'<div class="col-md-3">
                          <div class="iteam-grid text-center">
                          <img src="../tampilan_sponsor_edit_profile/file/'.$result['image'].'" title="name" /> <br>
                              <a href="../tampilan_acara_membuat_acara/index.php"><label>'.$result['name'].'</label></a>
								<ul>
									<li><a class="cart" href="#">Tawari</a></li>
									<li><a class="more" href="../deskripsi/deskripsispo.php?id='.$result['user_id'].'">Details</a></li>
									<div class="clearfix"> </div>
								</ul>
              </div>
                </div>';
  }
?>
					</div>
				</div>
				<!-- iteam-grids -->
		</div>

			<div class="container">
						<div class="categories-right">
							<ul>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li class="view"><a href="#">Next</a></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
				</div>
		<br>

		<!-- footer -->
		<div class="footer">
			<div class="footer-grids">
				<div class="container">
					<div class="col-md-3 footer-grid contact-grid">
						<h4>Contact us</h4>
							<ul>
							<li><span class="c-icon"> </span>Dramaga, Bogor, West Java</li>
							<li><span class="c-icon1"> </span><a href="#">eveor_id@gmail.com</a></li>
							</ul>
						</div>

						<div class="col-md-3 footer-grid contact-grid">
						<ul class="social-icons">
						<li>
							<a href="#"><span class="facebook"> </span>EVE-OR Indonesia</a>
						</li>
						<li></li>
						</ul>
						</div>

						<div class="col-md-3 footer-grid contact-grid">
						<ul class="social-icons">
						<li>
							<a href="#"><span class="twitter"> </span>@eveor_id</a>
						</li>
						<li></li>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<!-- container -->

		 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'deskripsispo.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
<?php }
else if (@$_SESSION['company']){
    ?>
    <script>document.location.href='../tampilan_awal_sponsor/awalspo.php';</script>
    <?php
  }else if (@$_SESSION['admin']){
      ?>
      <script>document.location.href='../admin/list.php';</script>
      <?php
    }else{?>
    <script language="javascript">alert("Anda belum login");</script>
    <script>document.location.href='../index.php';</script>
    <?php
  }
 ?>
