<div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <!-- Hasil upload -->
                    <div class="col-xl-12 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?></h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <?php foreach($foto as $group) : ?>
                                    <div class="col-xl-4 col-lg-6 col-sm-6">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <div class="new-arrival-product">
                                                    <div class="new-arrivals-img-contnent">
                                                        <a href="<?= base_url('upload/galeri/'.$group['foto']) ?>" class="col-lg-3 col-md-6 mb-4">
                                                            <img class="img-fluid" target="_blank" src="<?= base_url('upload/galeri/'.$group['foto']) ?>" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="mb-3">
                                    <a href="<?= base_url('Galeri') ?>" class="btn btn-block btn-danger">Kembali</a>
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