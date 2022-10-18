<?= $this->extend('templates/templatelandingpage'); ?>
<?= $this->section('content'); ?>

<div class="mt-5">
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(/assets/seo/templatelogin/images/orang-nyuci.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <br><br><br>
                                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <h6 style="font-size:30px; justify-content:center;">Daftar sekarang!</h6>
                                        <h6 style="font-size:15px; justify-content:center;">Mari bersih-bersih!</h6>
                                    </div>
                                </div>
                                <div class="w-100 height">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="facebook.com/profile.php?id=100009444702586" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="www.instagram.com/rlp.ren" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                                    </p>
                                </div>
                            </div>

                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>

                            <form action="/buatakun" class="signin-form">
                                <?= csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" required autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="namalengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="namalengkap" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="passwordkonfirmasi">Password Konfirmasi</label>
                                    <input type="password" class="form-control" placeholder="passwordkonfirmasi" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
                                </div>
                                <!-- <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Ingat Saya
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div> -->
                            </form>
                            <p class="text-center">Sudah punya akun? <a href="/masuk">Masuk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection('content'); ?>