<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Prestasi Sekolah</h5>
            <form action="<?php echo base_url('prestasi/tambah') ?>" method="POST" enctype="multipart/form-data">
            <input name="id" value="<?php echo $idsekolah['id_sekolah']?>" type="hidden" class="form-control">
                <div class="form-group">
                    <label for="nama_prestasi">Nama Prestasi</label>
                    <div>
                        <input type="text" class="form-control" id="nama_prestasi" name="nama_prestasi" placeholder="Nama Prestasi" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleEmail" class="">Jenis Prestasi </label>
                            <select name="jenis_prestasi" id="exampleSelect" class="form-control">
                                <option>Akademik</option>
                                <option>Seni</option>
                                <option>Olahraga</option>
                                <option>Dan Lain-lain</option>
                            </select>
                </div>
                <div class="form-group">
                    <label for="exampleEmail" class="">Tingkat Prestasi </label>
                            <select name="tingkat_prestasi" id="exampleSelect" class="form-control">
                                <option>Daerah</option>
                                <option>Kota</option>
                                <option>Provinsi</option>
                                <option>Nasional</option>
                                <option>Internasional</option>
                            </select>
                </div>
                <div class="form-group">
                    <label for="juara_prestasi">Juara Prestasi</label>
                    <div>
                        <input type="text" class="form-control" id="juara" name="juara" placeholder="Juara Prestasi" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="tanggal_prestasi">Tanggal Prestasi</label>
                    <input type="date" class="form-control" id="tgl_prestasi" name="tgl_prestasi" placeholder="Tanggal Prestasi" />
                </div>
                <div class="position-relative form-group">
                    <label for="exampleFile" class="">Foto Prestasi</label>
                    <input name="gambar_prestasi" type="file" class="form-control-file">
                    <small class="form-text text-muted"> Upload Foto Prestasi Anda Disini
                    </small>
                </div>
                <div class="form-group">
                    <div>
                        <div class="form-check">
                            <input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input" />
                            <label class="form-check-label">Terima Syarat dan Ketentuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>