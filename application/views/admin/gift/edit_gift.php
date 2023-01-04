<div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" novalidate="" action="<?= base_url('Gift/edit_gift/'.$gift['id']) ?>" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" name="id" value="<?= $gift['id']; ?>">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
														<input type="text" class="form-control" name="nama" id="validationCustom01" value="<?= $gift['nama'] ?>" placeholder="Enter a username.." required="">
														<div class="invalid-feedback">
															Masukkan Nama terlebih dahulu
														</div>
                                                        <?php echo form_error('nama', '<small class="text-danger ">*', '</small>') ?>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">Judul <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?= $gift['title'] ?>" name="title" id="validationCustom02" placeholder="Your valid email.." required="">
														<div class="invalid-feedback">
                                                            Masukkan Judul terlebih dahulu
														</div>
                                                        <?php echo form_error('title', '<small class="text-danger ">*', '</small') ?>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">No Rek
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="no_rek" value="<?= $gift['no_rek'] ?>" id="validationCustom03" placeholder="Choose a safe one.." required="">
														<div class="invalid-feedback">
                                                            Masukkan No Rek terlebih dahulu
														</div>
                                                        <?php echo form_error('no_rek', '<small class="text-danger ">*', '</small') ?>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">No Hp
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="no_hp" value="<?= $gift['no_hp'] ?>" id="validationCustom03" placeholder="+628023..." required="">
														<div class="invalid-feedback">
                                                            Masukkan No Hp terlebih dahulu
														</div>
                                                        <?php echo form_error('no_hp', '<small class="text-danger ">*', '</small>') ?>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom04">Deskripsi <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" name="deskripsi" id="validationCustom04" rows="5" placeholder="deskripsi" required="">
                                                            <?= $gift['deskripsi'] ?>
                                                        </textarea>
														<div class="invalid-feedback">
															Masukkan Deskripsi terlebih dahulu
														</div>
                                                        <?php echo form_error('deskripsi', '<small class="text-danger ">*', '</small>') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                     <div class="col-sm-2">Gambar</div>
                                                         <div class="col-sm-10">
                                                             <div class="row">
                                                                <div class="col-sm-3">
                                                                <img src="<?= base_url('/upload/gift/') . $gift['foto']; ?>" width="50%" target="_blank" class="img-thumbnail" alt="">
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="custom-file">
                                                                    <label for="foto">Pilih Gambar</label>
                                                                    <input type="file" id="foto" class="form-control" name="foto">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                           
                                            <div class="mb-3 me-2 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <a href="<?= base_url('Gift') ?>" class="btn btn-danger">Kembali</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

