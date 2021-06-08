<div class="tab-content">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH VIDEO SEKOLAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('media_video/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Link Youtube :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="video_media" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
</div>