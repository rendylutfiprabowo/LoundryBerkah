<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h6>Hubungi Kami</h6>
                                <h2>Mari Terhubung<span> Dengan Kami!</span></h2><br>
                                <h6 style="text-transform:lowercase;">atau</h6><br>
                                <h2>Sampaikan<em> Saran Atau Kritik</em> Kepada Kami</h2>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="name" name="nama" id="nama" placeholder="Nama kamu siapa?" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Ketik email kamu di sini..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button ">Kirim Pesan Sekarang</button>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <img src="/assets/seo/images/contact-icon-01.png" alt="email icon">
                                        </div>
                                        <a href="rendylutfiprabowo123@gmail.com">rendylutfiprabowo123@gmail.com</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="/assets/seo/images/contact-icon-02.png" alt="phone">
                                        </div>
                                        <a href="wa.me/+6288269638116">0882-6963-8116</a>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="/assets/seo/images/contact-icon-03.png" alt="location">
                                        </div>
                                        <a href="https://goo.gl/maps/QW8cebStZAnbNhUH9">Wisma Istiqomah, Bumi manti IV.<br>Kampung Baru, Kota Bandarlampung</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection('content'); ?>