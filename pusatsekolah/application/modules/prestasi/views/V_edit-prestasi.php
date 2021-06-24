<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Edit Prestasi Sekolah</h5>
            <form class="col-md-10 mx-auto" action="<?php echo base_url('prestasi/edit') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input name="id" value="<?php echo $tampil['id_prestasi'] ?>" type="hidden" class="form-control">
                    <label for="nama_prestasi">Nama Prestasi</label>
                    <div>
                        <input name="nama_prestasi" value="<?php echo $tampil['nama_prestasi'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleEmail" class="">Jenis Prestasi</label>
                            <select name="jenis_prestasi" <?php echo $tampil['jenis_prestasi']?> class="form-control">
                                <option <?php if('akademik' == $tampil['jenis_prestasi'] ){ echo 'selected="selected"'; } ?> value="akademik">Akademik</option>
                                <option <?php if('seni' == $tampil['jenis_prestasi'] ){ echo 'selected="selected"'; } ?> value="seni">Seni</option>
                                <option <?php if('olahraga' == $tampil['jenis_prestasi'] ){ echo 'selected="selected"'; } ?> value="olahraga">Olahraga</option>
                                <option <?php if('Dan Lain - Lain' == $tampil['jenis_prestasi'] ){ echo 'selected="selected"'; } ?> value="Dan Lain - Lain">Dan Lain - Lain</option>
                            </select>
                </div>
                <div class="form-group">
                    <label for="exampleEmail" class="">Tingkat Prestasi</label>
                            <select name="tingkat_prestasi" <?php echo $tampil['tingkat_prestasi']?> class="form-control">
                                <option <?php if('daerah' == $tampil['tingkat_prestasi'] ){ echo 'selected="selected"'; } ?> value="daerah">daerah</option>
                                <option <?php if('kota' == $tampil['tingkat_prestasi'] ){ echo 'selected="selected"'; } ?> value="kota">kota</option>
                                <option <?php if('provinsi' == $tampil['tingkat_prestasi'] ){ echo 'selected="selected"'; } ?> value="provinsi">provinsi</option>
                                <option <?php if('nasional' == $tampil['tingkat_prestasi'] ){ echo 'selected="selected"'; } ?> value="nasional">nasional</option>
                                <option <?php if('internasional' == $tampil['tingkat_prestasi'] ){ echo 'selected="selected"'; } ?> value="internasional">internasional</option>
                            </select>
                </div>
                <div class="form-group">
                    <label for="juara_prestasi">Juara Prestasi</label>
                    <div>
                        <input name="juara" value="<?php echo $tampil['juara'] ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tanggal_prestasi">Tanggal Prestasi</label>
                    <input name="tgl_prestasi" value="<?php echo $tampil['tgl_prestasi'] ?>" type="date" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleFile" class="">Foto Prestasi</label>
                    <input name="gambar_prestasi" type="file" class="form-control-file"><?php echo $tampil['gambar_prestasi'] ?>
                    <small class="form-text text-muted"> Ubah Foto Prestasi Anda Disini
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
                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Simpan Pembaruan</button>
                </div>
            </form>
        </div>
    </div>
</div>