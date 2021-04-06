<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Edit Profil Guru</h5>
                <form class="col-md-10 mx-auto" action="<?php echo base_url('data_guru/edit') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input name="nama_guru" value="<?php echo $tampil['nama_guru'] ?>" type="text" class="form-control">
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
                                            <input name="nip_guru" value="<?php echo $tampil['nip_guru'] ?>" type="number" class="form-control">
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
                                            <input name="tmplahir_guru" value="<?php echo $tampil['tmplahir_guru'] ?>" type="text" class="form-control">
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
                                            <input name="tgllahir_guru" value="<?php echo $tampil['tgllahir_guru'] ?>" type="date" class="form-control">
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
                                            <select name="jk_guru" value="<?php echo $tampil['jk_guru'] ?>" class="form-control">
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
                                            <input name="status_guru" value="<?php echo $tampil['status_guru'] ?>" type="text" class="form-control">
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
                                            <input name="mapel_guru" value="<?php echo $tampil['mapel_guru'] ?>" type="text" class="form-control">
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
                                    <input name="alamat_guru" value="<?php echo $tampil['alamat_guru'] ?>" type="text" class="form-control">
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
                                        <select name="provinsi_guru" value="<?php echo $tampil['provinsi_guru'] ?>" class="multiselect-dropdown form-control">
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
                                        <select name="kotakab_guru" value="<?php echo $tampil['kotakab_guru'] ?>" class="multiselect-dropdown form-control">
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
                                        <select name="kecamatan_guru" value="<?php echo $tampil['kecamatan_guru'] ?>" class="multiselect-dropdown form-control">
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
                                        <select name="kelurahan_guru" value="<?php echo $tampil['kelurahan_guru'] ?>" class="multiselect-dropdown form-control">
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
                                            <input name="kodepos_guru" value="<?php echo $tampil['kodepos_guru'] ?>" type="number" class="form-control">
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
                                            <input name="email_guru" value="<?php echo $tampil['email_guru'] ?>" type="email" class="form-control">
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
                                            <input name="telepon_guru" value="<?php echo $tampil['telepon_guru'] ?>" type="number" class="form-control">
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
                                            <input name="instagram_guru" value="<?php echo $tampil['instagram_guru'] ?>" type="text" class="form-control">
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
                                            <input name="facebook_guru" value="<?php echo $tampil['facebook_guru'] ?>" type="text" class="form-control">
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
                                            <input name="twitter_guru" value="<?php echo $tampil['twitter_guru'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <a href="tampilan-data-guru.html">
                            <button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Tambah</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>