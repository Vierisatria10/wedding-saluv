<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>

    <div class="row">
        <!-- Form Column -->
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg col-lg-7 mx-auto">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <h1 class="h4 text-gray-900 mb-4"><?= $breadcrumb; ?></h1>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('Akad/edit_akad/') . $akad['id']; ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $akad['id']; ?>">
                                    <div class="form-group mb-3">
                                        <label for="">Judul</label>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" value="<?= $akad['judul']; ?>">
                                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Jam</label>
                                        <input type="text" class="form-control form-control-user" id="jam" name="jam" value="<?= $akad['jam']; ?>">
                                        <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" id="alamat" style="height: 100%;" class="form-control">
                                            <?= $akad['alamat']; ?>
                                        </textarea>
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Nomor Hp</label>
                                        <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" value="<?= $akad['no_hp']; ?>">
                                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Link Maps</label>
                                        <input type="text" class="form-control form-control-user" id="link_maps" name="link_maps" value="<?= $akad['link_maps']; ?>">
                                        <?= form_error('link_maps', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2">Gambar</div>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="<?= base_url('/upload/akad/') . $akad['image']; ?>" target="_blank" class="img-thumbnail" alt="">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <label for="image">
                                                            Pilih Gambar
                                                        </label>
                                                        <input type="file" id="image" class="form-control" name="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <a class="mt-3 btn btn-warning btn-user btn-block" href="<?= base_url('Akad') ?>"> Kembali</a>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="mt-3 btn btn-info btn-user btn-block">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>