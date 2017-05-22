<?php
  include "../connect.php";
  if (isset($_SESSION['company'])){
    $company = $_SESSION['company'];
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
    $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $company");
    $data = mysqli_fetch_array($query);
    ?>
		<!-- container -->
			<!-- header -->
			<div class="header">
				<!-- logo -->
				<div class="logo">
					<a href="../tampilan_awal_sponsor/awalspo.php"><img src="images/logo.png" title="baku" /></a>
				</div>
				<!-- logo -->

				<!-- cart-info -->
				<div class="container">
				<div class="cart-info">
					<ul>
						<li class="dropdown"><a href="../tampilan_sponsor_liat_profile/index.php"><?php echo $data['name']; ?></a>
							<div class="dropdown-content">
							<a href="../tampilan_sponsor_liat_profile/index.php">View Profile</a> <br>
							<a href="../logoutproses.php">Logout</a> <br>
							</div>
						</li>

						<li class="dropdown"><a href="#">Category</a>
							<div class="dropdown-content">
							<a href="#">Musik</a> <br>
							<a href="#">Olahraga</a> <br>
							<a href="#">Edukasi</a>
							</div>
						</li>

						<li><a href="#">Inbox</a></li>
						<li><a href="../tampilan_awal_sponsor/awalspo.php">Home</a></li>
						</ul>


					</ul>
				</div>
				<!-- search-form -->
				<div class="search-form">
					<form align="center">
						<input type="text" class="text" value="Keyword or product code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword or product code';}">
						<input type="submit" value="" />
					</form>
				</div>
				<div class="clearfix"> </div>
				<!-- /search-form -->

				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
				<!-- script-for-nav -->

				<!-- /cart-info -->
				</div>
				<!-- header -->
			</div>
			<br>

		<h1> Kotak Masuk </h1>
		<br>
		<!-- iteam-grids -->
		<table border=1 align=left>
		<tr>
			<th>Nomor</th>
			<th>Nama Pengirim</th>
			<th>Nama Acara</th>
			<th>File Terlampir</th>
			<th>Tindakan</th>
		</tr>

		<tr>
			<td>1</td>
			<td>Farah Ghita</td>
			<td>Pesta Sains Nasional</td>
			<td><input type="submit" value="Download"></td>
			<td>
				<input type="submit" value="Accept">
				<input type="submit" value="Ignore">
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Samuel Daryl Ginting</td>
			<td>IT Today</td>
			<td><input type="submit" value="Download"></td>
			<td>
				<input type="submit" value="Accept">
				<input type="submit" value="Ignore">
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Devy Apriansyah</td>
			<td>Foberkom</td>
			<td><input type="submit" value="Download"></td>
			<td>
				<input type="submit" value="Accept">
				<input type="submit" value="Ignore">
			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Luthfi Jovan Wandy A</td>
			<td>Training Camp</td>
			<td><input type="submit" value="Download"></td>
			<td>
				<input type="submit" value="Accept">
				<input type="submit" value="Ignore">
			</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Ilham Ramadhan Kep</td>
			<td>Maen Bola</td>
			<td><input type="submit" value="Download"></td>
			<td>
				<input type="submit" value="Accept">
				<input type="submit" value="Ignore">
			</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Lazuardi Alias Laju</td>
			<td>Pertandingan Bumpballs.io</td>
			<td><input type="submit" value="Download"></td>
			<td>
				<input type="submit" value="Accept">
				<input type="submit" value="Ignore">
			</td>
		</tr>
		</table>
		</div>

		<!-- iteam-grids -->
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
	</body>
</html>
<?php
}
	else if (@$_SESSION['committee']){
			?>
			<script>document.location.href='../tampilan_awal_acara/awal.php';</script>
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
