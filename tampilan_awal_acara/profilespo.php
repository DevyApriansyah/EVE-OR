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
		<?php
		$query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $committee");
		$data = mysqli_fetch_array($query);
		?>
		<!-- container -->
			<!-- header -->
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
					<img src="images/bca.png" title="name"/>
					<h2><label>Bank Central Asia (BCA)</label></h2>
					<p>
						Berdiri sejak 1957, kami hadir di tengah masyarakat Indonesia dan tumbuh menjadi salah satu bank terbesar di Indonesia. Selama hampir 60 tahun kami tak pernah berhenti menawarkan beragam solusi perbankan yang menjawab kebutuhan finansial nasabah dari berbagai kalangan.
						Melalui beragam produk dan layanan yang berkualitas dan tepat sasaran, solusi finansial BCA mendukung perencanaan keuangan pribadi dan perkembangan nasabah bisnis. Didukung oleh kekuatan jaringan antar cabang, luasnya jaringan ATM, serta jaringan perbankan elektronik lainnya, siapa saja dapat menikmati kemudahan dan kenyamanan bertransaksi yang ditawarkan BCA.
						Sesuai dengan komitmen "Senantiasa di Sisi Anda", kami akan terus berupaya menjaga kepercayaan dan harapan nasabah serta para pemangku kepentingan. Memenangkan kepercayaan untuk memberikan solusi terbaik bagi kebutuhan finansial para nasabah adalah suatu kehormatan dan kebanggaan bagi BCA.
						Sesuai Surat Keputusan Menteri Keuangan Republik Indonesia no.42855/ U.M.II tertanggal 14 Maret 1957 perihal ijin melakukan usaha bank
					</p>
					<br>
					<p>
					Select File: <input type="file" name="proposal" multiple>
					</p>
					<p>
					<input type="reset" value="Cancel">

					<input type="submit" value="Submit">
					</p>
					</div>
		</div>
				<!-- iteam-grids -->
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
	</body>
</html>
<?php
}
	else if (@$_SESSION['company']){
			?>
			<script>document.location.href='../tampilan_awal_sponsor/awalspo.php';</script>
			<?php
    }else if (@$_SESSION['admin']){
        ?>
        <script>document.location.href='../admin/list.php';</script>
        <?php}
	else{
			?>
			<script language="javascript">alert("Anda belum login");</script>
			<script>document.location.href='../index.php';</script>
			<?php
		}
?>
