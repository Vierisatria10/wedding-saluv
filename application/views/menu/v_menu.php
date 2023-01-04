<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
        </ol>
    </div>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $breadcrumb ?></h4>
                </div>
                <br>
                <div class="d-flex me-4 justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#menubaruModal" class="btn btn-primary btn-sm"><i
                    class="fas fa-plus"></i> Tambah Menu</button>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered table-hover" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($menu as $m) :
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $m['menu'] ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href=""
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url('Menu/delete_menu/'. $m['id']) ?>"
                                                onclick="return confirm('Apakah yakin anda ingin menghapus data ini?')"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
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

<!-- Modal tambah menu -->
<div class="modal fade" id="menubaruModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="<?= base_url('Menu') ?>" method="POST">
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">Menu</label>
                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Masukkan Menu Baru">
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