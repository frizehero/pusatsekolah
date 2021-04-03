<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Alumni</h5>
                <form action="<?php echo base_url('data_alumni/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="nama_alumni" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIP :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="nisn" id="number" placeholder="....." type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tempat Lahir :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="tmplahir_alumni" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="tgllahir_alumni" id="text" placeholder="....." type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Kelamin :</label>
                                    <div class="col-sm-8">
                                        <div class="position-relative form-group">
                                            <select name="jk_alumni" id="exampleSelect" class="form-control">
                                                <option>Laki - Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="status_alumni" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Sekolah/Tempat Bekerja :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="sekolah_bekerja" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Alamat</h5>
                    <div class="position-relative form-group">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat Lengkap :</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input name="alamatlengkap_alumni" id="text" placeholder="....." type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Provinsi :</label>
                                    <div class="col-sm-8">
                                        <select name="provinsi_alumni" class="multiselect-dropdown form-control">
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Barat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kota/Kab :</label>
                                    <div class="col-sm-9">
                                        <select name="kotakab_alumni" class="multiselect-dropdown form-control">
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Barat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Kecamatan :</label>
                                    <div class="col-sm-8">
                                        <select name="kec_alumni" class="multiselect-dropdown form-control">
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Barat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kelurahan :</label>
                                    <div class="col-sm-9">
                                        <select name="kelurahan_alumni" class="multiselect-dropdown form-control">
                                            <option>Jawa Timur</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Barat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Kode Pos :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="kodepos_alumni" id="number" placeholder="....." type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Kontak</h5>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Email :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="email_alumni" id="exampleEmail" placeholder="....." type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Telephone :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="telephone_alumni" id="number" placeholder="....." type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Instagram :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="instagram_alumni" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Facebook :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="facebook_alumni" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Twitter :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="twitter_alumni" id="text" placeholder="....." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div clss="form-group">
                            <button name="signup" value="Sign up" type="submit" id="" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>