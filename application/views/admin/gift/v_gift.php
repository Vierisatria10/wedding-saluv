<div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
					</ol>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?></h4>
                            </div>
                            <br>
                            <div class="d-flex me-4 justify-content-end">
                                <button data-bs-toggle="modal" data-bs-target="#tambahgiftModal" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Gift</button>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-hover" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>Deskripi</th>
                                                <th>No Rek</th>
                                                <th>No Hp</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                                foreach ($gift as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $value->nama ?></td>
                                                <td><?= $value->title ?></td>
                                                <td><?= $value->deskripsi ?></td>
                                                <td><a href="javascript:void(0);"><strong><?= $value->no_rek ?></strong></a></td>
                                                <td><a href="javascript:void(0);"><strong><?= $value->no_hp ?></strong></a></td>
                                                <td>
                                                    <img src="<?= base_url('/upload/gift/'.$value->foto) ?>" class="img-thumbnail" width="70%" alt="">
                                                </td>
                                                <td>
													<div class="d-flex">
														<a href="<?= base_url('Gift/edit_gift/'.$value->id) ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="<?= base_url('Gift/delete_gift/'.$value->id) ?>" onclick="return confirm('Apakah yakin anda ingin menghapus data ini?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>

<!-- Modal tambah gift -->
<div class="modal fade" id="tambahgiftModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah GIFT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="<?= base_url('Gift') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="" class="col-lg-4 col-form-label">Nama
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                            <?php echo form_error('nama', '<small class="text-danger ">*', '</small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="" class="col-lg-4 col-form-label">Judul
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Judul">
                            <?php echo form_error('title', '<small class="text-danger ">*', '</small>') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="" class="col-lg-4 col-form-label">No Rek
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="no_rek" id="no_rek" class="form-control" placeholder="No rekening">
                            <?php echo form_error('no_rek', '<small class="text-danger ">*', '</small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="" class="col-lg-4 col-form-label">No Hp
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="No Hp">
                            <?php echo form_error('no_hp', '<small class="text-danger ">*', '</small>') ?>
                        </div>
                    </div>
                </div>
                
                <div class="form-group mb-3">
                    <label for="" class="col-lg-4 col-form-label">Deskripsi
                        <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="deskripsi" required=""></textarea>
                    <?php echo form_error('nama', '<small class="text-danger ">*', '</small>') ?>
                </div>
                <div class="custom-file mb-3">
                    <label for="foto" class="col-lg-4 col-form-label">Pilih Gambar</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Gift</button>
            </div>
        </form>
        </div>
    </div
</div>

<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($this->session->flashdata('success')) : ?>
    <script>
        Swal.fire({
            title: "Congratulation",
            text: "<?= $this->session->flashdata('success') ?>",
            icon: "success",
            showConfirmButton: false,
            timer: 1000,
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('update')) : ?>
    <script>
        Swal.fire({
            title: "Update",
            text: "<?= $this->session->flashdata('update') ?>",
            icon: "success",
            showConfirmButton: false,
            timer: 1000,
        });
    </script>
<?php endif; ?>

<script>
    $('.hapus-dev').on('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var id = $(this).attr('data-id');
                $.ajax({
                    'url': '<?= base_url('master/developer_controller/delete') ?>',
                    'type': 'POST',
                    'data': {
                        id: id
                    },
                    success: function() {
                        $('#' + id).fadeOut();
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    }
                })

            }
        })
    })
</script>