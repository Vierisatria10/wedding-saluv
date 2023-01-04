 <!-- row -->
<div class="container-fluid">
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengunjung Hari ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengunjunghariini ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-eye fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengunjung Online</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengunjungonline ?> orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wifi fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
		<!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pengunjung</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalpengunjung ?> Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-clipboard fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>					
	</div> 


	<!-- Tabel ucapan -->
	<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $title1 ?></h4>
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
                                                foreach ($rsvp as $rs) : ?>
                                
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
														<a href="#" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
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
        
<!--**********************************
            Content body end
        ***********************************-->