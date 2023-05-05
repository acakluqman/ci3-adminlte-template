<aside class="main-sidebar sidebar-dark-primary" aria-label="main-sidebar">
	<a href="<?= base_url() ?>" class="brand-link">
		<img src="<?= base_url('assets/vendor/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AKUNTANSI</span>
	</a>

	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/vendor/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
			</div>
		</div>

		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<nav class="mt-2" aria-label="nav">
			<ul class="nav nav-flat nav-legacy nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?= base_url('dashboard') ?>" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>DASHBOARD</p>
					</a>
				</li>

				<li class="nav-item <?= ($this->uri->segment(1) == 'master') ? 'menu-open' : '' ?>">
					<a href="#" class="nav-link <?= ($this->uri->segment(1) == 'master') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-database"></i>
						<p>
							DATA MASTER
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('master/akun') ?>" class="nav-link <?= ($this->uri->segment(2) == 'akun') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Daftar Akun</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Lorem Ipsum</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('transaksi') ?>" class="nav-link <?= ($this->uri->segment(1) == 'transaksi') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>TRANSAKSI</p>
					</a>
				</li>

				<li class="nav-item <?= ($this->uri->segment(1) == 'laporan') ? 'menu-open' : '' ?>">
					<a href="#" class="nav-link <?= ($this->uri->segment(1) == 'laporan') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-print"></i>
						<p>
							LAPORAN
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('laporan/transaksi') ?>" class="nav-link <?= ($this->uri->segment(2) == 'transaksi') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Transaksi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('laporan/jurnal-umum') ?>" class="nav-link <?= ($this->uri->segment(2) == 'jurnal-umum') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Jurnal Umum</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('laporan/buku-besar') ?>" class="nav-link <?= ($this->uri->segment(2) == 'buku-besar') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Buku Besar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('laporan/arus-kas') ?>" class="nav-link <?= ($this->uri->segment(2) == 'arus-kas') ? 'active' : '' ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Arus Kas</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('auth/logout') ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>LOGOUT</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
