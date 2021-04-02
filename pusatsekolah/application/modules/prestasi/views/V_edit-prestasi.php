<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Edut Prestasi Sekolah</h5>
            <form class="col-md-10 mx-auto" action="<?php echo base_url('prestasi/edit') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input name="id" value="<?php echo $tampil['id_prestasi'] ?>" type="hidden" class="form-control">
                    <label for="nama_prestasi">Nama Prestasi</label>
                    <div>
                        <input name="namap" value="<?php echo $tampil['nama_prestasi'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_prestasi">Jenis Prestasi</label>
                    <div>
                        <input name="jenisp" value="<?php echo $tampil['jenis_prestasi'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tingkat_prestasi">Tingkat Prestasi</label>
                    <div>
                        <input name="tingkatp" value="<?php echo $tampil['tingkat_prestasi'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="juara_prestasi">Juara Prestasi</label>
                    <div>
                        <input name="juara" value="<?php echo $tampil['juara'] ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tanggal_prestasi">Tanggal Prestasi</label>
                    <input name="tanggalp" value="<?php echo $tampil['tgl_prestasi'] ?>" type="date" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleFile" class="">Foto Prestasi</label>
                    <input name="gambarp" value="<?php echo $tampil['gambar_prestasi'] ?>" type="file" class="form-control-file">
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