<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $this->auth->app()->name ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('admin') ?>/assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url('admin') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?= base_url('admin') ?>/assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/demo.css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
	<style>
		.btn-lime {
			color: white;
			background-color: lime;
		}

		.card-table-data {
			box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, .2);
		}

		.notification {
			animation: countNotification 1s ease infinite;
		}

		.message-content {
			background-color: aqua;
			padding: 15px;
			border-top-right-radius: 27px;
			border-bottom-right-radius: 27px;
			border-bottom-left-radius: 27px;
		}

		.message-content:hover {
			box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, .2);
			cursor: pointer;
		}

		.message-content-show {
			height: 200px;
			padding: 10px;
			background-color: aqua;
			border-top-right-radius: 27px;
			border-bottom-right-radius: 27px;
			border-bottom-left-radius: 27px;
			overflow: auto;
		}

		.card-stats-hover:hover .flaticon-stats-hover {
			transform: scale(1.5);
			transition: 1s;
		}

		.avatar-animation {
			animation: avatarAnimation 4s ease infinite;
		}

		.icon-menu-animate-onclick {
			animation: iconMenuAnimateOnclick 1.5s ease infinite;
		}

		/* my animate */
		@keyframes countNotification {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		@keyframes avatarAnimation {
			0% {
				transform: rotateY(360deg);
			}

			100% {}
		}

		@keyframes iconMenuAnimateOnclick {
			0% {
				opacity: 1;
			}

			100% {
				transform: scale(1.3);
			}
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="#" class="logo">
					<img src="<?= base_url('admin') ?>/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" href="<?= base_url('notificationmember') ?>">
								<i class="fa fa-bell"></i>
								<?php if ($this->auth->cnotificationmember()) : ?>
									<span class="notification"><?= $this->auth->cnotificationmember() ?></span>
								<?php endif ?>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm avatar-animation">
									<?php if (!$this->auth->user()->avatar) : ?>
										<img src="<?= base_url('admin') ?>/assets/img/user/admin.jpg" alt="..." class="avatar-img rounded-circle">
									<?php else : ?>
										<img src="<?= base_url('admin') ?>/assets/files/avatar/<?= $this->auth->user()->avatar ?>" alt="..." class="avatar-img rounded-circle">
									<?php endif ?>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg">
												<?php if (!$this->auth->user()->avatar) : ?>
													<img src="<?= base_url('admin') ?>/assets/img/user/admin.jpg" alt="..." class="avatar-img rounded-circle">
												<?php else : ?>
													<img src="<?= base_url('admin') ?>/assets/files/avatar/<?= $this->auth->user()->avatar ?>" alt="..." class="avatar-img rounded-circle">
												<?php endif ?>
											</div>
											<div class="u-text">
												<h4><?= $this->auth->user()->name ?></h4>
												<p class="text-muted"><?= $this->auth->user()->email ?></p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url('auths/logout') ?>">Keluar</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">

			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2 avatar-animation">
							<?php if (!$this->auth->user()->avatar) : ?>
								<img src="<?= base_url('admin') ?>/assets/img/user/admin.jpg" alt="..." class="avatar-img rounded-circle">
							<?php else : ?>
								<img src="<?= base_url('admin') ?>/assets/files/avatar/<?= $this->auth->user()->avatar ?>" alt="..." class="avatar-img rounded-circle">
							<?php endif ?>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $this->auth->user()->name ?>
									<span class="user-level"><?= $this->auth->user()->role ?></span>
									<!-- <span class="caret"></span> -->
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?= base_url('auths/logout') ?>">
											<span class="link-collapse">Keluar</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="<?= base_url('profilemember') ?>">
								<i class="fas fa-desktop text-success"></i>
								<p>Profile Saya</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item active element-menu-files">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-folder-open icon-menu-animate"></i>
								<p>Files</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('musicmember') ?>">
											<span class="sub-item">Music</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('videomember') ?>">
											<span class="sub-item">Video</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('/') ?>">
								<i class="fas fa-home text-success"></i>
								<p>Beranda</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>