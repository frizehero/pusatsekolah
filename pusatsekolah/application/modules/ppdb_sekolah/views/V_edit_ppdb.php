<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Edit PPDB Sekolah</h5>
            <br>
            <form class="col-md-10 mx-auto" action="<?php echo base_url('ppdb_sekolah/edit') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input name="id" value="<?php echo $tampil['id_ppdb'] ?>" type="hidden" class="form-control">
                    <label for="alamat_sekolah">Alamat Sekolah</label>
                    <div>
                        <input name="alamat_sekolah" value="<?php echo $tampil['alamat_sekolah'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telp_sekolah">No. Telephone Sekolah</label>
                    <div>
                        <input name="telp_sekolah" value="<?php echo $tampil['telp_sekolah'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email_sekolah">Email Sekolah</label>
                    <div>
                        <input name="email_sekolah" value="<?php echo $tampil['email_sekolah'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="website_sekolah">Website Sekolah</label>
                    <div>
                        <input name="website_sekolah" value="<?php echo $tampil['website_sekolah'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi_ppdb">Deskripsi PPDB</label>
                    <div>
                        <input name="deskripsi_ppdb" value="<?php echo $tampil['deskripsi_ppdb'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fasilitas_sekolah">Fasilitas Sekolah</label>
                    <div>
                        <input name="fasilitas_sekolah" value="<?php echo $tampil['fasilitas_sekolah'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pendaftaran_ppdb">Pendaftaran PPDB</label>
                    <div>
                        <input name="pendaftaran_ppdb" value="<?php echo $tampil['pendaftaran_ppdb'] ?>" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="validasi_pemberkasan">Validasi Pemberkasan</label>
                    <div>
                        <input name="validasi_pemberkasan" value="<?php echo $tampil['validasi_pemberkasan'] ?>" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="verifikasi_daftarulang">Verifikasi Daftar Ulang</label>
                    <input name="verifikasi_daftarulang" value="<?php echo $tampil['verifikasi_daftarulang'] ?>" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <!-- <label for="exampleFile" class="">Pamflet PPDB</label> -->
                    <input name="foto" type="file" class="form-control-file" value="><?php echo $tampil['pamflet_ppdb'] ?>"><?php echo $tampil['pamflet_ppdb'] ?>
                    <small class="form-text text-muted"> Ubah Pamflet Anda Disini
                    </small>
                </div>
                <br>
                <!-- <div class="form-group">
                    <div>
                        <div class="form-check">
                            <input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input" />
                            <label class="form-check-label">Terima Syarat dan Ketentuan</label>
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-dark" name="signup" value="Sign up">Simpan Pembaruan</button>
                </div>
            </form>
        </div>
    </div>
</div>