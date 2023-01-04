<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)"><?= $breadcrumb ?></a></li>
		</ol>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
						<div class="profile-photo">
							<img src="<?= base_url('upload/user/'.$user['image']) ?>" class="img-thumbnail" alt="">
						</div>
						<div class="profile-details">
							<div class="profile-name px-3 pt-2">
								<h4 class="text-primary mb-0"><?= $user['nama'] ?></h4>
								<p class="text-muted"><?php  if ($user['role_id'] == 1) {
                                    echo "Admin";
                                }else if($user['role_id'] == 2){
                                    echo "Member";
                                }  ?></p>
							</div>
							<div class="profile-email px-2 pt-2">
								<h4 class="text-muted mb-0"><?= $user['email'] ?></h4>
								<p>Email</p>
							</div>
						</div>
                    </div>
                    <div class="mb-3">
                        <a href="<?= base_url('user/edit') ?>" class="btn btn-primary">Edit Profile</a>
                        <a href="<?= base_url('user/gantipassword') ?>" class="btn btn-danger">Ganti Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>