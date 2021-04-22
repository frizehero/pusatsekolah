<div class="app-main__inner">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form id="signupForm" action="<?php echo base_url('ppdb/edit') ?>" method="POST" enctype="multipart/form-data">
                    <input name="id" value="<?php echo $tampil['id_ppdb']?>" type="hidden" class="form-control">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                        <div class="card-body">
                                            <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="card-title">PAMFLET PPDB SEKOLAH</div>
                                                    <div class="card mb-3 widget-content bg-primary">
                                                        <div class="widget-content-wrapper text-white">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">UPLOAD PAMFLET PPDB SEKOLAH</div>
                                                                <div class="widget-subheading">File upload maximal 2 Mb</div>
                                                                <input name="pamflet_ppdb" value="<?php echo $tampil['pamflet_ppdb'] ?>" type="file" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-title">JUDUL PPDB</div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input name="judul_ppdb" value="<?php echo $tampil['judul_ppdb'] ?>" type="text" placeholder="" class="form-control">
                                                    </div>
                                                    <br>
                                                    <div class="card-title">DESKRIPSI DAN INFORMASI PPDB</div>
                                                    <div class="position-relative form-group">
                                                        <textarea name="deskripsi_ppdb" value="<?php echo $tampil['deskripsi_ppdb'] ?>" type="text"class="form-control"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card-title">TANGGAL AWAL PPDB</div>
                                                            <input name="tglawal_ppdb" value="<?php echo $tampil['tglawal_ppdb'] ?>" type="date" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card-title">TANGGAL BATAS AKHIR PPDB</div>
                                                            <input name="tglakhir_ppdb" value="<?php echo $tampil['tglakhir_ppdb'] ?>" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="clearfix">
                                                    <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                    <button type="submit" name="signup" value="Sign up" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>