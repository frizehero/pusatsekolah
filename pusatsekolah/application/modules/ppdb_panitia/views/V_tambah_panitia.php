<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Panitia PPDB</h5>
                <br>
                <form action="<?php echo base_url('ppdb_panitia/tambah') ?>" method="POST" enctype="multipart/form-data">
                <!-- <input name="id" value="<?php echo $idsekolah['id_sekolah']?>" type="text" class="form-control"> -->
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Panitia :</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input name="nama_panitia" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tugas Panitia :</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input name="tugas_panitia" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Telephone Panitia :</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input name="telephone_panitia" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email Panitia :</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input name="email_panitia" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-3 widget-content bg-white">
                                <div class="widget-content-wrapper text-black">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">UPLOAD FOTO PANITIA</div>
                                        <div class="widget-subheading">File upload maximal 2 Mb</div>
                                        <input name="foto" type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
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