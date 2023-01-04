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
                                <button data-bs-toggle="modal" data-bs-target="#tambahroleModal" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Role</button>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-hover" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Role Akses</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                                foreach ($role as $ro) :
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $ro['role'] ?></td>
                                                <td>
													<div class="d-flex">
                                                    <a href="<?= base_url('User/akses_role/'.$ro['id']) ?>" title="Akses Role" class="btn btn-success shadow btn-xs sharp me-1"><i class="fas fa-users"></i></a>
														<a href="<?= base_url('User/edit_role/'.$ro['id']) ?>" title="Edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="<?= base_url('User/delete_role/'.$ro['id']) ?>" title="Delete" onclick="return confirm('Apakah yakin anda ingin menghapus data ini?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
				</div>
            </div>

<!-- Modal tambah gift -->
<div class="modal fade" id="tambahroleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="<?= base_url('User/role') ?>" method="POST">
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="" class="col-lg-4 col-form-label">Role Akses
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="role" id="role" class="form-control" placeholder="Role Akses">
                    <?php echo form_error('role', '<small class="text-danger ">*', '</small>') ?>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Role</button>
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