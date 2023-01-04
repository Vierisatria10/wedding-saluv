<div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?></h4>
                            </div>
                            <div class="card-body">
                            <p class="text-primary">
                                 <?= $this->session->flashdata('pesan'); ?>
                            </p>
                               
                                    <?= form_open_multipart('Galeri/upload_galeri') ?>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <!-- <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
														<input type="text" class="form-control" name="nama" id="validationCustom01" placeholder="Enter a username..">
														<div class="invalid-feedback">
															Masukkan Nama terlebih dahulu
														</div>
                                                        <?php echo form_error('nama', '<small class="text-danger ">*', '</small>') ?>
                                                    </div>
                                                </div> -->
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="foto">Foto
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control" name="foto[]" multiple id="foto">
                                                            <!-- <label class="custom-file-label" for="foto">Choose file</label> -->
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="mb-3 ms-1 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    <?= form_close(); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Hasil upload -->
                    <div class="col-xl-12 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hasil Foto</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <?php foreach($galeri as $group) : 
                                        
                                    ?>
                                    <div class="col-xl-4 col-lg-6 col-sm-6">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <div class="new-arrival-product">
                                                    <div class="new-arrivals-img-contnent">
                                                        <img class="img-fluid" target="_blank" src="<?= base_url('upload/galeri/'.$group['foto']) ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a href="<?= base_url('Galeri/detail/'.$group['group_image']) ?>" class="btn btn-info">Detail</a>
                                                <a href="<?= base_url('Galeri/delete/'.$group['id']) ?>" onclick="return confirm('Apakah yakin anda ingin menghapus data ini?')"  class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
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

<?php if ($this->session->flashdata('error')) : ?>
    <script>
        Swal.fire({
            title: "Gagal",
            text: "<?= $this->session->flashdata('error') ?>",
            icon: "error",
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