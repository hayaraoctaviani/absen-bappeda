<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/header.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger "

        Tip 2: you can also add an image using data-image tag
    -->

            <div class="logo"><a href="#" class="simple-text logo-normal">
                    Admin Absensi
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url('admin') ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Daftar Hadir</p>
                        </a>
                    </li>
                    <li class="nav-item active-color ">
                        <a class="nav-link" href="pengaturan.html">
                            <i class="material-icons">settings</i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">content_paste</i> Berdasarkan Kriteria
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="#" class="dropdown-item">
                                <i class="material-icons">layers</i> Umur 50 Tahun Ke Atas
                            </a>
                            <a href="<?php base_url('admin/sakit') ?>" class="dropdown-item">
                                <i class="material-icons">sick</i> Sakit
                            </a>
                            <a href="<?php base_url('admin/izin') ?>" class="dropdown-item">
                                <i class="material-icons">messages</i> Izin
                            </a>
                        </div>
                    </li>
                    <li class="nav-item active-color active ">
                        <a class="nav-link" href="<?= base_url('admin/pegawai'); ?>">
                            <i class="material-icons">library_books</i>
                            <p>Daftar Pegawai</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Beranda</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="places-buttons">
                                <div class="row">
                                    <div class="col-lg-12 col-md-15 ml-auto">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','left')">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Daftar Pegawai</h4>
                                <p class="card-category"> </p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary" align="center">
                                            <th>
                                                NIP
                                            </th>
                                            <th>
                                                Nama
                                            </th>
                                            <th>
                                                Umur
                                            </th>
                                            <th>
                                                Bidang
                                            </th>
                                            <th>
                                                Jabatan
                                            </th>
                                            <th>
                                                Aksi
                                            </th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($user as $u) : ?>
                                                <tr align="center">
                                                    <td>
                                                        <?= $u->nip; ?>
                                                    </td>
                                                    <td>
                                                        <?= $u->nama; ?>
                                                    </td>
                                                    <td>
                                                        <?= $u->umur; ?>
                                                    </td>
                                                    <td>
                                                        <?= $u->bidang; ?>
                                                    </td>
                                                    <td>
                                                        <?= $u->jabatan; ?>
                                                    </td>
                                                    <td class="btn btn-primary">
                                                        <?= anchor('#', 'Edit'); ?>
                                                    </td>
                                                    <td class="btn btn-danger">
                                                        <?= anchor('admin/delete/' .$u->nip,'Hapus'); ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="places-buttons">
                            <div class="row">
                                <div class="col-lg-8 col-md-10 ml-auto">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','left')">Cetak Dokumen</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>