<!DOCTYPE html>
<html>
<?php include 'connect.php'; ?>
	<head>
		<title>Percobaan Fungsi Notifikasi</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2 align="center">Ini Fungsi Notifikasi Sederhana</h2>
			<br />
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Home</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span>Notification</a>
							<ul class="dropdown-menu"></ul>
						</li>
					</ul>
				</div>
			</nav>
			<br />
			<form method="POST" id="form_penawaran">
				<div class="form-group">
					<label>Pengirim</label>
					<input type="text" name="subject" id="subject" class="form-control" />
				</div>
				<div class="form-group">
					<label>Nama Acara</label>
					<input type="text" name="event" id="event" class="form-control" />
				</div>
				<div class="form-group">
					<input type="submit" name="submit" id="submit" class="btn btn-info" value="Tawarkan" />
				</div>
		</div>
	</body>
</html>

<script>
	$(document).ready(function(){
		function load_unseen_notification(view=''){
			$.ajax({
				url:"notification.php",
				method:"POST",
				data:{view:view},
				dataType:"json",
				success:function(data){
					$('.dropdown-menu').html(data.notification);
					if(data.unseen_notification>0){
						$('.count').html(data.unseen_notification);
					}
				}
			});
		}

		load_unseen_notification();

		$('#form_penawaran').on('submit', function(event){
			event.preventDefault();
			if($('#subject').val()!='' && $('#event').val()!=''){
				var form_data=$(this).serialize();
				$.ajax({
					url:"insert.php",
					method:"POST",
					data:form_data,
					success:function(data){
						$('#form_penawaran')[0].reset();
						load_unseen_notification();
					}
				})
			}
			else{
				alert("Isi keduanya atuh");
			}
		});

		$(document).on('click', '.dropdown-toggle', function(){
			$('.count').html('');
			load_unseen_notification('yes');
		})

		setInterval(function(){
			load_unseen_notification();
		}, 5000);
	});
</script>