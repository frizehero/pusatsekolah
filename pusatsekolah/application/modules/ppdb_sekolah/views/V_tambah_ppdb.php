<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Informasi PPDB</h5>
                <form action="<?php echo base_url('ppdb_sekolah/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="card mb-3 widget-content bg-white">
                                <div class="widget-content-wrapper text-black">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">UPLOAD FOTO SEKOLAH</div>
                                        <div class="widget-subheading">File upload maximal 2 Mb</div>
                                        <input name="foto" type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi PPDB :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <!-- <input name="nama_panitia" id="text" placeholder="....." type="text" class="form-control"> -->
                                            <textarea rows="8" name="deskripsi_ppdb" class="form-control autosize-input" style="height: 77px;"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fasilitas Sekolah :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <!-- <input name="nama_panitia" id="text" placeholder="....." type="text" class="form-control"> -->
                                            <textarea rows="8" name="fasilitas_sekolah" class="form-control autosize-input" style="height: 77px;"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pendaftaran PPDB :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <!-- <input name="nama_panitia" id="text" placeholder="....." type="text" class="form-control"> -->
                                            <textarea rows="8" name="pendaftaran_ppdb" class="form-control autosize-input" style="height: 77px;"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Validasi / Pemberkasan :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <!-- <input name="nama_panitia" id="text" placeholder="....." type="text" class="form-control"> -->
                                            <textarea rows="8" name="validasi_pemberkasan" class="form-control autosize-input" style="height: 77px;"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Verifikasi / Daftar Ulang :</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <!-- <input name="nama_panitia" id="text" placeholder="....." type="text" class="form-control"> -->
                                            <textarea rows="8" name="verifikasi_daftarulang" class="form-control autosize-input" style="height: 77px;"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div clss="form-group">
                            <button name="signup" value="Sign up" type="submit" id="" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-dark">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>