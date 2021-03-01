<body class="index-page sidebar-collapse">
  <script type="text/javascript">
    function EnableDisableTextBox() {
      var izin = document.getElementById("izin");
      var keterangan = document.getElementById("keterangan");
      keterangan.disabled = izin.checked ? false : true;
      if (!keterangan.disabled) {
        keterangan.focus();
      }
    }

    window.setTimeout("waktu()", 1000);

    function waktu() {
      var waktu = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = waktu.getHours();
      document.getElementById("menit").innerHTML = waktu.getMinutes();
      document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
  </script>
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
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
              <i class="material-icons">person</i> <?= $user['nama']; ?>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?= base_url('user_login/profil'); ?>" class="dropdown-item">
                <i class="material-icons">person</i> Profil
              </a>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                <i class="material-icons">close</i> Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter blue-filter" data-parallax="true" style="background-image: url(<?= base_url('assets/user/img/DSC_6922.JPG') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <img src="<?= base_url('assets/user/img//logo.png') ?>" alt="logo" style="width: 220px;height: 200px;"><br>
            <h1>BAPPEDA</h1>
            <h3>Provinsi Sulawesi Tenggara</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-navbars cd-section" id="navigation">
      <div class="section section-basic">
        <div class="container">
          <form action="user_login/absen" method="post">
            <div id="checkRadios">
              <div class="row">
                <div class="col-lg-12 col-md-4 col-sm-6">
                  <div class="title text-center">
                    <h3>Form Absensi</h3><br>
                    <?php
                    date_default_timezone_set("Asia/Kuala_lumpur");
                    echo "<h4>Tanggal :" . date('d-m-Y') . "</h4>"
                    ?>
                    <div class="jam-digital">
                      <div class="kotak">
                        <p id="jam"></p>
                      </div>
                      <div class="kotak">
                        <p id="menit"></p>
                      </div>
                      <div class="kotak">
                        <p id="detik"></p>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="hidden" name="nip" id="nip" value="<?= $user['nip']; ?>">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="hidden" name="jam" id="jam" value="<?= date('h:i'); ?>">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="hidden" name="tanggal" id="tanggal" value="<?= date('d-m-Y'); ?>">
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="status" id="status2" value="hadir" onclick="EnableDisableTextBox()">
                      Hadir
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="status" id="status1" value="terlambat" onclick="EnableDisableTextBox()">
                      Terlambat
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="status" id="status1" value="sakit" onclick="EnableDisableTextBox()">
                      Sakit
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label" for="izin">
                      <input class="form-check-input" type="radio" name="status" id="izin" value="izin" onclick="EnableDisableTextBox()">
                      Izin
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <!--                 inputs -->
            <div id="inputs">
              <div class="row">
                <div class="col-lg-3 col-sm-4">
                  <div class="form-group">
                    <label for="keterangan" class="bmd-label-floating">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" disabled="disabled" required>
                    <span class="bmd-help">Tidak boleh dikosongkan</span>
                  </div>
                </div>
              </div>
            </div>
            <!--                 end inputs -->
            <div id="buttons" class="cd-section">
              <div class="row">
                <div class="col-md-8 mx-left">
                  <button class="btn btn-primary btn-round" value="kirim">Kirim</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- Classic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->