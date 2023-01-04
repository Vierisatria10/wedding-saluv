<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card px-3 pt-3 pb-0">
                <div class="card-header">
                    <h4 class="card-title"><?= $breadcrumb ?></h4>
                 </div>
                <div class="card-body">
                 <?= $this->session->flashdata('pesan'); ?>
                    <form action="<?= base_url('user/gantipassword') ?>" method="POST">
                        <div class="mb-3 row">
                            <label for="password_lama" class="col-sm-2 col-form-label">Password lama</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_lama" class="form-control" id="password_lama">
                            </div>
                            <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 row">
                            <label for="password1baru" class="col-sm-2 col-form-label">Password baru</label>
                            <div class="col-sm-10">
                                <input type="password" name="password1baru" class="form-control" id="password1baru">
                            </div>
                            <?= form_error('password1baru', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mb-3 row">
                            <label for="password2baru"  class="col-sm-2 col-form-label">Konfirmasi password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password2baru" class="form-control" id="password2baru">
                            </div>
                            <?= form_error('password2baru', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-info">Ganti Password</button>
                            <a href="<?= base_url('user') ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>