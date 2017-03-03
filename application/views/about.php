<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Blog Dyahdyana</a>
						</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url()?>/home">home</a></li>
								<li><a href="<?php echo site_url()?>/about">About</a></li>
								<li><a href='<?php echo site_url()?>/contact'>Contact</a></li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
							
							<ul class="nav navbar-nav navbar-right">
								 
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<div class="jumbotron">
					<div class="container">
						<h1>Tentang Saya</h1>
					
				</div>
				
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>Data Diri </h4>
				<table class="table table-striped table-hover">
					
					<tbody>
						<tr>
							<td>Nama: </td>
							<td><?php echo $nama ?></td>
						</tr>
						<tr>
							<td>Alamat: </td>
							<td><?php echo $alamat ?></td>
						</tr>
						<tr>
							<td>Jurusan: </td>
							<td><?php echo $jurusan ?></td>
						</tr>
						<tr>
							<td>NIM: </td>
							<td><?php echo $nim?></td>
						</tr>
						<tr>
							<td>Kelas: </td>
							<td><?php echo $kelas ?></td>
						</tr>
						<tr>
							<td>No. Telp: </td>
							<td><?php echo $telp ?></td>
						</tr>
						<tr>
							<td>Hobby: </td>
							<td><?php echo $hobby ?></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td><?php echo $email?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<img src="<?php echo base_url(); ?>assets/ab.jpg" width=100%>
				
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>