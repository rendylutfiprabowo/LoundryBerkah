<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col">

                <h2 class="mt-5">Riwayat Transaksi</h2>
                <a href="/simpandata" class="btn btn-primary">Tambah Data</a>
                <table class="table mt-3 justify-content-center">
                    <thead class="thead-dark ">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">JUMLAH</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($output as $op) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $op['id_pemasukan']; ?></td>
                                <td><?= $op['tgl_pemasukan']; ?></td>
                                <td><?= $op['jumlah_pemasukan']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-warning mr-3" href="/edit/<?= $op['id_pemasukan'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <form action="/delete/<?= $op['id_pemasukan'] ?>" method="post">
                                            <input type="hidden" name="_methode" value="DELETE">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection('content'); ?>