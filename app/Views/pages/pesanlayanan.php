<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Pesan Layanan</h6>
                        <h2>Ayo <em>Pesan Layanan</em> yang kamu butuhkan <span>sekarang</span> juga!</h2>
                    </div>
                    <!-- form action ini isinya function controller -->
                    <form action="/simpandata" method="post">
                        <div class="form-group">
                            <label for="nama_pelanggan">NAMA</label>
                            <input type="name" name="nama_pelanggan" class="form-control" id="nama_pelanggan">
                        </div>
                        dropdown layanan
                        jumlah kilo
                        alamat
                        nomorhp

                        <div class="form-group">
                            <label for="tgl_pemasukan">TANGGAL</label>
                            <input type="date" name="tgl_pemasukan" class="form-control" id="tgl_pemasukan">
                        </div>

                        <div class="form-group">
                            <label for="jumlah_pemasukan">JUMLAH</label>
                            <input type="number" name="jumlah_pemasukan" class="form-control" id="jumlah_pemasukan">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>

<?= $this->endsection('content'); ?>