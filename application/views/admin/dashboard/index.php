<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Dashboard</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Base</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Data</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-primary card-round card-stats-hover">
						<div class="card-body">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="flaticon-customer-support flaticon-stats-hover"></i>
									</div>
								</div>
								<div class="col-7 col-stats">
									<div class="numbers">
										<p class="card-category">Lagu</p>
										<h4 class="card-title"><?= $cmusic ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-info card-round card-stats-hover">
						<div class="card-body">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="flaticon-youtube flaticon-stats-hover"></i>
									</div>
								</div>
								<div class="col-7 col-stats">
									<div class="numbers">
										<p class="card-category">Video</p>
										<h4 class="card-title"><?= $cvideo ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-success card-round card-stats-hover">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="flaticon-users flaticon-stats-hover"></i>
									</div>
								</div>
								<div class="col-7 col-stats">
									<div class="numbers">
										<p class="card-category">Member</p>
										<h4 class="card-title"><?= $cmember ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="card card-stats card-secondary card-round card-stats-hover">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="flaticon-hands flaticon-stats-hover"></i>
									</div>
								</div>
								<div class="col-7 col-stats">
									<div class="numbers">
										<p class="card-category">Suka</p>
										<h4 class="card-title"><?= $this->auth->app()->visitor ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="card card-stats card-danger card-round card-stats-hover">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="flaticon-interface-6 flaticon-stats-hover"></i>
									</div>
								</div>
								<div class="col-7 col-stats">
									<div class="numbers">
										<p class="card-category">Postingan Blog</p>
										<h4 class="card-title"><?= $cblog ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="card card-stats card-warning card-round card-stats-hover">
						<div class="card-body ">
							<div class="row">
								<div class="col-5">
									<div class="icon-big text-center">
										<i class="flaticon-user flaticon-stats-hover"></i>
									</div>
								</div>
								<div class="col-7 col-stats">
									<div class="numbers">
										<p class="card-category">Admin Ganteng</p>
										<h4 class="card-title">1</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>