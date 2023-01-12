<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">
        <div class="d-flex me-4 justify-content-end">
            <button data-bs-toggle="modal" data-bs-target="#tambahakadModal" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Akad</button>
        </div>
        <br>
        <?php foreach($akad as $a) : ?>
        <div class="col-xl-4 col-md-4">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="d-block card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $a['judul']; ?></h6>
                </a>

                <!-- Card Content - Collapse -->
                    <div class="collapse" id="collapseExample">
                        <div class="card-body text-center">
                            <div class="col-sm text-center">
                                <img src="<?= base_url('upload/akad/') . $a['image']; ?>" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="card-body border-bottom-primary">
                            <label class="font-weight-bold" for="judul">Judul</label>
                            <p class="mb-4"><?= $a['judul']; ?> </p>

                            <label class="font-weight-bold" for="jam">Jam</label>
                            <p class="mb-4"><?= $a['jam']; ?> WIB - Selesai</p>

                            <label class="font-weight-bold" for="tanggal">Tanggal</label>
                            <p class="mb-4"><?= $a['tanggal']; ?></p>

                            <label class="font-weight-bold" for="alamat">Alamat</label>
                            <p class="mb-4"><?= $a['alamat']; ?> </p>

                            <label class="font-weight-bold" for="no_hp">No HP</label>
                            <p class="mb-4"><?= $a['no_hp']; ?> </p>

                            <label class="font-weight-bold" for="link_maps">Link Maps</label>
                            <p class="mb-4"><?= $a['link_maps']; ?> </p>

                            <a class="btn btn-sm btn-primary" href=" <?= base_url('Akad/edit_akad/'.$a['id']) ?>"><i class="fas fa-edit"></i> Edit</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data akad?');" href=" <?= base_url('Akad/delete_akad/') . $a['id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                        </div>
                    </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal tambah cv -->
<div class="modal fade" id="tambahakadModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Akad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="<?= base_url('Akad') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                </div>
                <div class="form-group mb-2">
                    <label for="">Jam Pelaksanaan</label>
                    <input type="time" class="form-control" id="jam" name="jam" placeholder="Jam Pelaksanaan">
                </div>
                <div class="form-group mb-2">
                    <label for="">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                </div>
                <div class="form-group mb-2">
                    <label for="">Nomor HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP">
                </div>
                <div class="form-group mb-2">
                    <label for="">Link Maps</label>
                    <input type="text" class="form-control" id="link_maps" name="link_maps" placeholder="link_maps">
                </div>
                <div class="custom-file mb-2">
                    <label for="image">Pilih Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div
</div>
