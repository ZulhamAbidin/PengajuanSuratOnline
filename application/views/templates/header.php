<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.css">

	<style>
    .lorem {
        background-color: #2B5F9B !important;
        color: white !important;
		border: #2B5F9B !important;
    }

	.lorem-warna{
		color: white !important;
	}
</style>

</head>
<body>
	<div class="wrapper">
		<div class="sidebar lorem lorem-warna">
			<div class="logo">
				<a class="simple-text logo-mini lorem">
					SI
				</a>
				<a class="simple-text logo-normal lorem">
					Pelayanan surat
				</a>
			</div>
			<div class="sidebar-wrapper lorem-warna"">
				<?php if ($this->session->userdata('id_user') == TRUE) : ?>
					<div class="user">
						<div class="photo">
							<img src="<?= base_url() ?>/assets/img/default-avatar.png" />
						</div>
						<div class="info lorem">
							<a data-toggle="collapse" class="lorem-warna" href="#collapseExample" class="collapsed lorem">
								<span >
									<?php

									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

									?>
									<?= ucfirst($data['username']); ?>
									<b class="caret"></b>
								</span>
							</a>
							<div class="clearfix"></div>
							<div class="collapse" id="collapseExample">
								<ul class="nav">
									<!-- <li>
                                        <a href="#">
                                            <span class="sidebar-mini">MP</span>
                                            <span class="sidebar-normal">My Profile</span>
                                        </a>
                                    </li> -->
									<li>
										<a href="<?= base_url() ?>user/edit/<?= $this->session->userdata('id_user'); ?>">
											<span class="sidebar-mini lorem">EP</span>
											<span class="sidebar-norma lorem">Edit Profile</span>
										</a>
									</li>
									<!-- <li>
                                        <a href="#">
                                            <span class="sidebar-mini">S</span>
                                            <span class="sidebar-normal">Settings</span>
                                        </a>
                                    </li> -->
								</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>


				<ul class="nav">
					<li class="<?php if ($title == 'Dashboard') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('dashboard') ?>">
							<i class="material-icons lorem">dashboard</i>
							<p><span class="lorem">Dashboard</span></p>
						</a>
					</li>

					<li class="
						<?php if ($title == 'Management Surat') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" class="lorem-warna" href="#pagesExamples">
							<i class="material-icons lorem"">email</i>
							<p><span class="lorem">Management Surat</span>
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Surat') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="pagesExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Pengajuan Surat') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>surat/pengajuan" class="lorem">
										<span class="sidebar-mini">M</span>
										<span class="sidebar-normal">Pengajuan Surat</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Masuk') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>surat/surat_masuk">
										<span class="sidebar-mini">M</span>
										<span class="sidebar-normal">Surat Masuk</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Keluar') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>surat/surat_keluar">
										<span class="sidebar-mini">K</span>
										<span class="sidebar-normal">Surat Keluar</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Keterangan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>surat/surat_keterangan">
										<span class="sidebar-mini">SK</span>
										<span class="sidebar-normal">Surat Keterangan</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<li class="
						<?php if ($title == 'Galery') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" class="lorem-warna" href="#formsExamples">
							<i class="material-icons lorem">image</i>
							<p><span class="lorem">Galery</span>
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Galery') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="formsExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Profil Kelurahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>galery/profil_kelurahan">
										<span class="sidebar-mini">RF</span>
										<span class="sidebar-normal">Profil Kelurahan</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur Kelurahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>galery/s_kelurahan">
										<span class="sidebar-mini">EF</span>
										<span class="sidebar-normal">Struktur Kelurahan</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur LPM') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>galery/s_lpm">
										<span class="sidebar-mini">VF</span>
										<span class="sidebar-normal">Struktur LPM</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur Linmas') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>galery/s_linmas">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Struktur Linmas</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur Pemuda Kelurahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>galery/s_pemuda">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Pemuda Kelurahan</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Ketua RT & RW') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a class="lorem" href="<?= base_url() ?>galery/rt_rw">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Ketua RT & RW</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="<?php if ($title == 'Penduduk') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('penduduk') ?>">
							<i class="material-icons lorem">assignment_ind</i>
							<p><span class="lorem">Penduduk</span></p>
						</a>
					</li>

					<?php if ($this->session->userdata('level') == 'administrator') : ?>


						<li class="
                        <?php if ($title == 'Management Pegawai') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">
							
						<a href="<?= base_url('pegawai') ?>">
							<i class="material-icons lorem">supervised_user_circle</i>
							<p><span class="lorem">Management Pegawai</span></p>
						</a>

						</li>

						<li class="
                        <?php if ($title == 'Management User') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">

							<a href="<?= base_url('') ?>user">
								<i class="material-icons lorem">people</i>
								<p><span class="lorem">Management User</span></p>
							</a>

						</li>

					<?php endif; ?>

					<?php if ($this->session->userdata('id_user') == TRUE) : ?>

						<li>
							<a href="<?= base_url('logout') ?>">
							<i class="material-icons lorem">logout</i>
							<p><span class="lorem">Logout</span></p>
						</a>
						</li>

					<?php else : ?>

						<li>
							<a href="<?= base_url() ?>auth/login">
								<i class="material-icons lorem">login</i>
								<p>Login</p>
							</a>
						</li>

					<?php endif; ?>



				</ul>
			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn lorem btn-just-icon">
							<i class="material-icons lorem visible-on-sidebar-regular">more_vert</i>
							<i class="material-icons lorem visible-on-sidebar-mini">view_list</i>
						</button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" class="lorem-warna">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <?= $title; ?> </a>
					</div>
					<!-- <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">



							<li>
								<a href="<?= base_url() ?>auth/login" class="dropdown-toggle">
									<i class="material-icons lorem">login</i>
									<p class="hidden-lg hidden-md">Login</p>
								</a>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons lorem">person</i>
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group form-search is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons lorem">search</i>
								<div class="ripple-container"></div>
							</button>
						</form>
					</div> -->
				</div>
			</nav>