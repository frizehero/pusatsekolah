<div class="content">
    <section class="gray-bg no-top-padding-sec" id="sec1">
        <div class="container">
            <br><br>
            <!-- <div class="list-main-wrap-title single-main-wrap-title fl-wrap align-center">
                <h2>Daftar Sebagai Alumni<span></span></h2>
            </div> -->
            <form action="<?php echo base_url('data_alumni/tambah') ?>" method="POST" enctype="multipart/form-data">
                <input name="id_sekolah" value="<?php echo $idsekolah['id_sekolah']?>" type="hidden" class="form-control">
                <div class="fl-wrap ">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="bookiing-form-wrap block_box fl-wrap">
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <form>
                                                <fieldset class="fl-wrap">                                                    
                                                   <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Profil Lengkap</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Username <i class="far fa-user"></i></label>
                                                            <input name="username_alumni" type="text" placeholder="Username" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Nama Lengkap <i class="far fa-user"></i></label>
                                                            <input name="nama_alumni" type="text" placeholder="Nama Lengkap" value=""/> 
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Tahun Lulus <i class="far fa-user"></i></label>
                                                            <input name="thlulus_alumni" type="text" placeholder="Tahun Lulus" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">NISN <i class="far fa-user"></i></label>
                                                            <input name="nisn" type="text" placeholder="NISN" value=""/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="vis-label"> Tempat Lahir <i class="fal fa-barcode"></i> </label>
                                                            <input name="tmplahir_alumni" type="text" placeholder="Tempat Lahir"/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="vis-label"> Tanggal Lahir <i class="fal fa-calendar"></i> </label>
                                                            <input name="tgllahir_alumni" type="text" placeholder="Tanggal Lahir"/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="vis-label"> Jenis Kelamin <i class="fal fa-calendar"></i> </label>
                                                            <input name="jk_alumni" type="text" placeholder="Jenis Kelamin"/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Status Alumni <i class="far fa-user"></i></label>
                                                            <input name="status_alumni" type="text" placeholder="Status Alumni" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Tempat Sekolah/Bekerja <i class="far fa-user"></i></label>
                                                            <input name="sekolah_bekerja" type="text" placeholder="Tempat Sekolah/Bekerja" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Fakultas/Pekerjaan <i class="far fa-user"></i></label>
                                                            <input name="pekerjaan_fakultas" type="text" placeholder="Tempat Sekolah/Bekerja" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Email<i class="far fa-envelope"></i>  </label>
                                                            <input name="email_alumni" type="text" placeholder="Email" value=""/>                                                  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">No. Telephone<i class="far fa-phone"></i>  </label>
                                                            <input name="telephone_alumni" type="text" placeholder="No. Telephone" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Facebook <i class="far fa-user"></i></label>
                                                            <input name="facebook_alumni" type="text" placeholder="Facebook" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Instagram <i class="far fa-user"></i></label>
                                                            <input name="instagram_alumni" type="text" placeholder="Instagram" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Twitter <i class="far fa-user"></i></label>
                                                            <input name="twitter_alumni" type="text" placeholder="Twitter" value=""/>
                                                        </div>
                                                        <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Alamat Lengkap</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Provinsi <i class="fal fa-globe-asia"></i></label>
                                                            <input name="provinsi_alumni" type="text" placeholder="Provinsi" value=""/>  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kabupaten/Kota <i class="fal fa-globe-asia"></i></label>
                                                            <input name="kotakab_alumni" type="text" placeholder="Kota" value=""/>  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kecamatan <i class="fal fa-globe-asia"></i></label>
                                                            <input name="kec_alumni" type="text" placeholder="Kecamatan" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kelurahan <i class="fal fa-globe-asia"></i></label>
                                                            <input name="kelurahan_alumni" type="text" placeholder="Kecamatan" value=""/>
                                                        </div>
                                                            <div class="col-sm-8">
                                                                <label class="vis-label">Alamat Lengkap <i class="fal fa-road"></i> </label>
                                                                <input name="alamatlengkap_alumni" type="text" placeholder="Alamat Lengkap" value=""/>                                                  
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label class="vis-label">Kode Pos<i class="fal fa-barcode"></i> </label>
                                                                <input name="kodepos_alumni" type="text" placeholder="123456" value=""/>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Foto Profil</h3> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Foto Sampul</h3>
                                                            </div>
                                                            <label class="vis-label"> <i class="far fa-user"></i></label>
                                                            <div class="fuzone">
                                                                <div class="fu-text">
                                                                    <span><i class="fal fa-images"></i> Upload File (.pdf) </span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input name="foto" type="file" class="upload" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Deskripsi</h3>
                                                    </div>
                                                    <input name="deskripsi_alumni" type="text" cols="40" rows="3" placeholder="Notes">
                                                    <span class="fw-separator"></span>
                                                    </div>
                                                    </div>
                                                    <button name="signup" value="Sign up" type="submit"  class="next-form action-button color-bg">Simpan</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--   list-single-main-item end -->
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>