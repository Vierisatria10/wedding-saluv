<!-- Modal -->
<div class="modal fade" id="AddGaleri">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Galeri/upload_galeri') ?>" enctype="multipart/form-data" method="post">
                    <div class="col-lg-12 mb-3">
                        <label for="">Judul</label>
                        <input type="text" name="title" class="form-control" placeholder="judul..">
                    </div> 
                    <div class="col-lg-12">
                        <label for="" class="form-label" id="uploadFile">Foto</label>
                        <input multiple="" type="file" name="foto[]" class="form-control" placeholder="foto.." required>
                    </div>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    </div>                                 
                </form>
            </div>
           
        </div>
    </div>
</div>