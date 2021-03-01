<body class="login-page">
    <div class="page-header header-filter" style="background-image: url(<?= base_url('/assets/user/img/DSC_6922.JPG'); ?>); background-size: cover; background-position:top-center; height:100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="card-header card-header-primary text-center" style="margin-top:10px;">
                                <h4 class="card-title">Registrasi</h4>
                                <div class="social-line">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" name="umur" id="umur" placeholder="Umur..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Jenis Kelamin..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Bidang..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Jabatan..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password..." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi password..." required>
                                </div>
                                <div class="tim-typo">
                                    <p class="text-primary" style="font-size: 12px;">
                                        <a href="reset-password.php">Lupa Password?</a>
                                    </p>
                                    <p class="text-primary" style="font-size: 12px;">
                                        <a href="<?= base_url('auth'); ?>">Sudah memiliki akun? Login!</a>
                                    </p>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-primary pull-center" style="margin-top:-24%; margin-left:35%">Daftar</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>