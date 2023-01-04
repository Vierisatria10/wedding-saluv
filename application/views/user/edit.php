<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4 class="card-title"><?= $breadcrumb ?></h4>
                    </div>
                    <br>
                    <?= form_open_multipart('user/edit') ?>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">Foto</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('upload/user/') . $user['image']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <label for="image">Pilih Gambar</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info">Edit</button>
                            </div>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>