<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="background-image: url(<?= base_url('/assets/user/img/DSC_6922.JPG'); ?>); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login" style="margin-top: 80px;">
            <form class="form" method="post" action="<?= base_url('auth'); ?>">
              <div class="card-header card-header-primary text-center" style="margin-top:10px;">
                <h4 class="card-title">Login</h4>
                <div class="social-line">

                </div>
              </div>

              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">account_circle</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP..." required>
                </div>
              </div>
              <div class="tim-typo">
                <p class="text-primary" style="font-size: 12px;">
                  <a href="reset-password.php">Lupa Password?</a>
                </p>
                <p class="text-primary" style="font-size: 12px;">
                  <a href="<?= base_url('auth/registration') ?>">Belum memiliki akun? Buat akun</a>
                </p>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary pull-center" style="margin-top:-27%; margin-left:25%;">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>