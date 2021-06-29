<div class="app-main__inner">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form id="signupForm" action="<?php echo base_url('ppdb/tambah') ?>" method="POST" enctype="multipart/form-data">
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
                                                                <input name="pamflet_ppdb" type="file" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-title">JUDUL PPDB</div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"></div>
                                                        <input type="text" id="judul_ppdb" name="judul_ppdb" placeholder="" class="form-control">
                                                    </div>
                                                    <br>
                                                    <div class="card-title">DESKRIPSI DAN INFORMASI PPDB</div>
                                                    <div class="position-relative form-group">
                                                        <textarea type="text" id="deskripsi_ppdb" name="deskripsi_ppdb" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card-title">TANGGAL AWAL PPDB</div>
                                                            <input type="date" id="tglawal_ppdb" name="tglawal_ppdb" placeholder="Pilih Tanggal" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card-title">TANGGAL BATAS AKHIR PPDB</div>
                                                            <input type="date" id="tglakhir_ppdb" name="tglakhir_ppdb" placeholder="Pilih Tanggal" class="form-control">
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