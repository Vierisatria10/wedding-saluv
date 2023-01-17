<div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
					</ol>
                </div>
                <!-- row -->
                <?= $this->session->flashdata('pesan'); ?>
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?></h4>
                            </div>
                            <br>
                            <div class="d-flex me-4 justify-content-end">

                                <button type="button" data-bs-toggle="modal" data-bs-target="#mempelaiwanitaModal" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Mempelai</button>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-hover" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Save The Date</th>
                                                <th>Tanggal</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                                foreach ($mempelai_wanita as $wanita) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $wanita['nama'] ?></td>
                                                <td><?= $wanita['save_the_date'] ?></td>
                                                <td><?= $wanita['tanggal'] ?></td>
                                                <td><?= $wanita['alamat'] ?></td>
                                                <td>
                                                    <img src="<?= base_url('upload/mempelai/'.$wanita['image']) ?>" class="rounded-circle" width="100px" alt="">
                                                </td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="<?= base_url('Mempelai/delete_wanita/' . $wanita['id']) ?>" onclick="return confirm('Apakah yakin anda ingin menghapus data ini?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="mempelaiwanitaModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Mempelai Wanita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="<?= base_url('Mempelai/mempelai_wanita') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                
                    
                        <div class="form-group mb-3">
                            <label for="" class="col-lg-4 col-form-label">Nama
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                            <?php echo form_error('nama', '<small class="text-danger ">*', '</small>') ?>
                        </div>
                    
                    
                        <div class="form-group mb-3">
                            <label for="" class="col-lg-4 col-form-label">Save The Date
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="save_the_date" id="save_the_date" class="form-control" placeholder="Save The Date">
                            <?php echo form_error('save_the_date', '<small class="text-danger ">*', '</small>') ?>
                        </div>
                   
                <div class="form-group mb-3">
                    <label for="" class="col-lg-4 col-form-label">Tanggal
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal">
                    <?php echo form_error('tanggal', '<small class="text-danger ">*', '</small>') ?>
                </div>
              
                <div class="form-group mb-3">
                    <label for="" class="col-lg-4 col-form-label">Alamat
                        <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Alamat" required=""></textarea>
                    <?php echo form_error('alamat', '<small class="text-danger ">*', '</small>') ?>
                </div>
                <div class="custom-file mb-3">
                    <label for="image" class="col-lg-4 col-form-label">Pilih Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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