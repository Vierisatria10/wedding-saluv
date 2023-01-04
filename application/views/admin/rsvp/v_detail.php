<div class="container-fluid">
    <div class="row page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <?php foreach($rsvp as $rs) : ?>
            <div class="card o-hidden border-0 shadow-lg mx-auto">
                <div class="card-body">
                    <h5 class="text-primary d-inline">Ucapan Tamu</h5>
                    <div class="media pt-3 pb-3">
                        <img src="<?= base_url('upload/rsvp/'.$rs['foto']) ?>" width="75" class="me-3 rounded" alt="image">
                        <div class="media-body">
                            <h5 class="m-b-5"><a href="post-details.html" class="text-black"><?= $rs['nama'] ?></a></h5>
                            <small class="text-primary">(<?= $rs['no_hp'] ?>)</small> | <small class="text-info"><?= $rs['alamat'] ?></small>
                            <p class="mb-1"><?= $rs['kehadiran'] ?></p>
                            <p class="mb-0"><?= $rs['ucapan'] ?></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('RSVP') ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>