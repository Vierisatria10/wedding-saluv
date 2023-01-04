<div class="container-fluid">
    <div class="row page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>         
    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">
        <div class="col-lg-12">
        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?> : <?= $role['role'] ?></h4>
                            </div>
                            <br>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-hover" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Menu</th>
                                                <th>Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                                foreach ($menu as $me) :
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $me['menu'] ?></td>
                                                <td>
													<div class="d-flex">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $me['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $me['id']; ?>">
                                                        </div>
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