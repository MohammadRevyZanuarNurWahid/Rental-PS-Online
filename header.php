<?php
session_start();
	if ($_SESSION['status_login']!=true) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Rental Playstation -  Mohammad Revy Zanuar Nur Wahid</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="box-shadow: 4px 4px 5px -4px;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">RENTAL PLAYSTATION</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="ps.php">PLAYSTATION</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="histori_peminjaman.php">Transaksi Sewa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="login.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container bg-light rounded" style="margin-top: 10px">
		<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Sewa PS online</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Refresh
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tampil_playstation.php">Playstation</a>
                                    <a class="nav-link" href="tampil_pelanggan.php">Pelanggan</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Sewa Di sini
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Menu Login
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                        </nav>
                                    </div>
                            <div class="sb-sidenav-menu-heading">Data Rental</div>
                            <a class="nav-link" href="ps.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pilih Playstation
                            </a>
                            <a class="nav-link" href="histori_peminjaman.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Sewa Playstation
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="medium">Mohammad Revy Zanuar Nur Wahid</div>
                        20510009
                    </div>
                </nav>
            </div>
