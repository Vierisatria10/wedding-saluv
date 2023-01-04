<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>
    
    <div class="row">
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $breadcrumb ?></h4>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-hover" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tamu</th>
                                                <th>Alamat</th>
                                                <th>Hadir/Tidak</th>
                                                <th>Ucapan</th>
												<th>No. Hp</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($rsvp as $rs) :
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rs['nama'] ?></td>
                                                <td><?= $rs['alamat'] ?></td>
                                                <td><?= $rs['kehadiran'] ?></td>
                                                <td><a href="javascript:void(0);"><strong><?= $rs['ucapan'] ?></strong></a></td>
                                                <td><a href="javascript:void(0);"><strong><?= $rs['no_hp'] ?></strong></a></td>
                                                <!-- <td>
                                                    <img src="<?= base_url('assets/images/avatar/1.jpg') ?>" class="rounded-circle" width="100px" alt="">
                                                </td> -->
                                                <td>
													<div class="d-flex">
														<a href="<?= base_url('RSVP/detail_rsvp/'.$rs['id']) ?>"  class="btn btn-info shadow btn-sm sharp"><i class="fas fa-eye"></i></a>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#rsvpModal<?= base_url('RSVP/delete/'.$rs['id']) ?>" class="btn btn-danger shadow btn-sm sharp"><i class="fas fa-trash-alt"></i></button>
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

