<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tambah Guru</h5>
                <form action="<?php echo base_url('data_guru/tambah') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" value="<?php echo $idsekolah['id_sekolah']?>" type="text" class="form-control">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="nama_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                            <input name="nip_guru" id="number" placeholder="....." type="number" class="form-control">
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
                                            <input name="tmplahir_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                            <input name="tgllahir_guru" id="text" placeholder="....." type="date" class="form-control">
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
                                            <select name="jk_guru" id="exampleSelect" class="form-control">
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
                                            <input name="status_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                    <label class="col-sm-4 col-form-label">Mata Pelajaran :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="mapel_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                    <input name="alamat_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                        <select name="provinsi_guru" class="multiselect-dropdown form-control">
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
                                        <select name="kotakab_guru" class="multiselect-dropdown form-control">
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
                                        <select name="kecamatan_guru" class="multiselect-dropdown form-control">
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
                                        <select name="kelurahan_guru" class="multiselect-dropdown form-control">
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
                                            <input name="kodepos_guru" id="number" placeholder="....." type="number" class="form-control">
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
                                            <input name="email_guru" id="exampleEmail" placeholder="....." type="email" class="form-control">
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
                                            <input name="telepon_guru" id="number" placeholder="....." type="number" class="form-control">
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
                                            <input name="instagram_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                            <input name="facebook_guru" id="text" placeholder="....." type="text" class="form-control">
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
                                            <input name="twitter_guru" id="text" placeholder="....." type="text" class="form-control">
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