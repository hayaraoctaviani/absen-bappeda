<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('user_login/index'); ?>">
          Absensi Bappeda Sultra </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">person</i> Profil
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="material-icons">person</i> Profil
              </a>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                <i class="material-icons">close</i> logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('user_login/index'); ?>">
          Absensi Bappeda Sultra </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">person</i> Profil
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="#" class="dropdown-item">
                <i class="material-icons">person</i> Profil
              </a>
              <a href="<?= base_url('auth'); ?>" class="dropdown-item">
                <i class="material-icons">close</i> logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url(<?php echo base_url('assets/user/img/DSC_6922_1.JPG') ?>);"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="<?= base_url('assets/user/img/') . $user['foto']; ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
            </div>
          </div>
        </div>
        <form action="edit-page.php">
          <div class="description text-justify">
            <h3 class="text-center">Profil</h3>
            <p>NIP : <?= $user['nip']; ?> </p><br>
            <p>Nama : <?= $user['nama']; ?> </p><br>
            <p>Bidang : <?= $user['bidang']; ?> </p><br>
            <p>Jabatan : <?= $user['jabatan']; ?> </p><br>
            <p>Umur : <?= $user['umur']; ?> </p><br>
          </div>
          <div id="buttons" class="cd-section">
            <div class="row">
              <div class="col-md-110 mx-auto">
                <button class="btn btn-default">Edit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>