<div class="app-main__inner">
                <?php tampilnotif()?>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                        <ul class="nav">
                                            <li class="nav-item col-md-12">
                                                <a data-toggle="tab" href="#tab-eg8-0" class="active nav-link dropdown-item">
                                                    EDIT PROFIL
                                                </a>
                                            </li>
                                            <li class="nav-item col-md-12">
                                                <a data-toggle="tab" href="#tab-eg8-2" class="nav-link dropdown-item">
                                                    JAM OPERASIONAL
                                                </a>
                                            </li>
                                            <li class="nav-item col-md-12">
                                                <a data-toggle="tab" href="#tab-eg8-4" class="nav-link dropdown-item">
                                                    JURUSAN
                                                </a>
                                            </li>
                                            <li class="nav-item col-md-12">
                                                <a data-toggle="tab" href="#tab-eg8-5" class="nav-link dropdown-item">
                                                    SOSIAL MEDIA
                                                </a>
                                            </li>
                                            <li class="nav-item col-md-12">
                                                <a data-toggle="tab" href="#tab-eg8-1" class="nav-link dropdown-item">
                                                    KEPALA SEKOLAH
                                                </a>
                                            </li>
                                            <li class="nav-item col-md-12">
                                                <a data-toggle="tab" href="#tab-eg8-6" class="nav-link dropdown-item">
                                                    SEJARAH SEKOLAH
                                                </a>
                                            </li>
                                        </ul>
                                </div>
                                <div class="col-md-8">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                                <form action="<?php echo base_url('p_sekolah/edit') ?>" method="POST" enctype="multipart/form-data">
                                                    <input name="id" value="<?php echo $tampilkompetensi['id_p_sekolah']?>" type="hidden" class="form-control">
                                                    <div class="card-body">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <h5 class="card-title">Foto Profil</h5>
                                                                    <input name="fotoprofil" type="file" class="form-control-file">
                                                                    </small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <h5 class="card-title">Foto Sampul</h5>
                                                                    <input name="fotosampul" type="file" class="form-control-file">
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                        <div class="col-md-8">
                                                            <h5 class="card-title">NAMA SEKOLAH</h5>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <input name="namas" value="<?php echo $tampilkompetensi['nama_sekolah']?>" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <h5 class="card-title">JENJANG SEKOLAH</h5>
                                                                <select name="jjgs" value="<?php echo $tampilkompetensi['jjg_sekolah']?>" class="form-control">
                                                                        <option <?php if ('PAUD' == $tampilkompetensi['jjg_sekolah']) {echo 'selected="selected"';} ?> value="PAUD">PAUD </option>
                                                                        <option <?php if ('TK'   == $tampilkompetensi['jjg_sekolah']) {echo 'selected="selected"';} ?> value="TK">TK </option>
                                                                        <option <?php if ('SD'   == $tampilkompetensi['jjg_sekolah']) {echo 'selected="selected"';} ?> value="SD">SD </option>
                                                                        <option <?php if ('SMP'  == $tampilkompetensi['jjg_sekolah']) {echo 'selected="selected"';} ?> value="SMP">SMP </option>
                                                                        <option <?php if ('SMA'  == $tampilkompetensi['jjg_sekolah']) {echo 'selected="selected"';} ?> value="SMA">SMA </option>
                                                                        <option <?php if ('SMK'  == $tampilkompetensi['jjg_sekolah']) {echo 'selected="selected"';} ?> value="SMK">SMK </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <h5 class="card-title">STATUS SEKOLAH</h5>
                                                        <div class="input-group">
                                                        <input name="stts" value="<?php echo $tampilkompetensi['stt_sekolah']?>" type="text" class="form-control">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Negeri / Swasta</span>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">NPSN SEKOLAH</h5>
                                                                <input name="npsns" value="<?php echo $tampilkompetensi['npsn_sekolah']?>" type="text" class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">AKREDITASI SEKOLAH</h5>
                                                                <select name="akres" value="<?php echo $tampilkompetensi['akre_sekolah']?>" class="form-control">
                                                                        <option <?php if ('A'  == $tampilkompetensi['akre_sekolah']) {echo 'selected="selected"';} ?> value="A">A </option>
                                                                        <option <?php if ('B'  == $tampilkompetensi['akre_sekolah']) {echo 'selected="selected"';} ?> value="B">B </option>
                                                                        <option <?php if ('C'  == $tampilkompetensi['akre_sekolah']) {echo 'selected="selected"';} ?> value="C">C </option>
                                                                        <option <?php if ('D'  == $tampilkompetensi['akre_sekolah']) {echo 'selected="selected"';} ?> value="D">D </option>
                                                                        <option <?php if ('E'  == $tampilkompetensi['akre_sekolah']) {echo 'selected="selected"';} ?> value="E">E </option>
                                                                </select>
                                                            </div>
                                                        </div>   
                                                        <br>
                                                        <h5 class="card-title">DESKRIPSI SEKOLAH</h5>
                                                        <div class="position-relative form-group">
                                                            <input name="desks" value="<?php echo $tampilkompetensi['desk_sekolah']?>" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-9">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">ALAMAT LENGKAP SEKOLAH</h5>
                                                                    <input name="almtls" value="<?php echo $tampilkompetensi['almtlengkap_sekolah']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">KODEPOS</h5>
                                                                    <input name="kposs" value="<?php echo $tampilkompetensi['kpos_sekolah']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">Provinsi</h5>
                                                                <select name="prov" class="form-control" id="provinsi">
                                                                    <option><?php echo $tampilkompetensi['provinsi']?></option>
                                                                    <?php 
                                                                        foreach($provinsi as $prov)
                                                                        {
                                                                            echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">Kota / Kab</h5>
                                                                <select name="kab" class="form-control" id="kabupaten">
                                                                    <option><?php echo $tampilkompetensi['kota_kab']?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">Kecamatan</h5>
                                                                <select name="kec" class="form-control" id="kecamatan">
                                                                    <option><?php echo $tampilkompetensi['kecamatan']?></option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">Kelurahan</h5>
                                                                <select name="des" class="form-control" id="desa">
                                                                    <option><?php echo $tampilkompetensi['kelurahan']?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="main-card mb-3">
                                                            <div class="card-body">
                                                                <div class="card-title">Tentukan Titik Koordinat</div>
                                                                
                                                                <div id="googleMap" style="width:100%;height:380px;"></div>
                                                                
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <h5 class="card-title">Latitude</h5>
                                                                                <input type="text" id="lat" name="lat" value="<?php echo $tampilkompetensi['latitude']?>" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <h5 class="card-title">Longitude</h5>
                                                                                <input type="text" id="lng" name="lng" value="<?php echo $tampilkompetensi['longitude']?>" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                        <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Tampilkan</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h5 class="card-title">HARI</h5>
                                                                <button type="button" class="btn btn-outline-primary btn-lg btn-block disabled">SENIN</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5 class="card-title">JAM BUKA</h5>
                                                                <input name="seninm" value="<?php echo $tampilkompetensi['senin_m']?>" type="time" class="form-control">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5 class="card-title">JAM TUTUP</h5>
                                                                <input name="seninp" value="<?php echo $tampilkompetensi['senin_p']?>" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <button type="button" class="btn btn-outline-primary btn-lg btn-block disabled">SELASA</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="selasanm" value="<?php echo $tampilkompetensi['selasa_m']?>" type="time" class="form-control">
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="selasap" value="<?php echo $tampilkompetensi['selasa_p']?>" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <button type="button" class="btn btn-outline-primary btn-lg btn-block disabled">RABU</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="rabum" value="<?php echo $tampilkompetensi['rabu_m']?>" type="time" class="form-control">
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="rabup" value="<?php echo $tampilkompetensi['rabu_p']?>" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <button type="button" class="btn btn-outline-primary btn-lg btn-block disabled">KAMIS</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="kamism" value="<?php echo $tampilkompetensi['kamis_m']?>" type="time" class="form-control">
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="kamisp" value="<?php echo $tampilkompetensi['kamis_p']?>" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <button type="button" class="btn btn-outline-primary btn-lg btn-block disabled">JUMAT</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="jumatm" value="<?php echo $tampilkompetensi['jumat_m']?>" type="time" class="form-control">
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="jumatp" value="<?php echo $tampilkompetensi['jumat_p']?>" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <button type="button" class="btn btn-outline-primary btn-lg btn-block disabled">SABTU</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="sabtum" value="<?php echo $tampilkompetensi['sabtu_m']?>" type="time" class="form-control">
                                                            </div>
                                                            <div class="col-md-4">
                                                            <input name="sabtup" value="<?php echo $tampilkompetensi['sabtu_p']?>" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                        <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Tampilkan</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-eg8-4" role="tabpanel">
                                                        <div class="card-body">
                                                            <div class="card-title">JURUSAN / KOMPETENSI KEAHLIAN</div>
                                                                <div class="position-relative form-group">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Jurusan 1 :</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                            <input name="jrsn1" value="<?php echo $tampilkompetensi['kompetensi1']?>" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative form-group">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Jurusan 2 :</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                            <input name="jrsn2" value="<?php echo $tampilkompetensi['kompetensi2']?>" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative form-group">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Jurusan 3 :</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                            <input name="jrsn3" value="<?php echo $tampilkompetensi['kompetensi3']?>" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative form-group">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Jurusan 4 :</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                            <input name="jrsn4" value="<?php echo $tampilkompetensi['kompetensi4']?>" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative form-group">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Jurusan 5 :</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                            <input name="jrsn5" value="<?php echo $tampilkompetensi['kompetensi5']?>" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix">
                                                                    <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                                    <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Tampilkan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="tab-pane" id="tab-eg8-5" role="tabpanel">
                                                    <div class="card-body">
                                                        <div class="position-relative form-group">
                                                            <h5 class="card-title">EMAIL</h5>
                                                            <input name="emails" value="<?php echo $tampilkompetensi['email']?>" type="email" class="form-control">
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">TELEPON SEKOLAH</h5>
                                                                    <input name="tlps" value="<?php echo $tampilkompetensi['telphone']?>" type="number" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">INSTAGRAM</h5>
                                                                    <input name="igs" value="<?php echo $tampilkompetensi['instagram']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">FACEBOOK</h5>
                                                                    <input name="fbs" value="<?php echo $tampilkompetensi['facebook']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">TWITTER</h5>
                                                                    <input name="twitters" value="<?php echo $tampilkompetensi['twitter']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">LINK WEBSITE SEKOLAH</h5>
                                                                    <input name="lws" value="<?php echo $tampilkompetensi['link_web']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <h5 class="card-title">LINK VIDEO PROFIL SEKOLAH</h5>
                                                                    <input name="lvs" value="<?php echo $tampilkompetensi['link_video']?>" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                        <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Tampilkan</button>
                                                    </div>
                                            </div>
                                            <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                                        <div class="form-group">
                                                            <h5 class="card-title">Foto Kepala Sekolah</h5>
                                                            <input name="fotokepsek" type="file" class="form-control-file">
                                                        </div>
                                                        <h5 class="card-title">NAMA Kepala Sekolah</h5>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input name="namakepsek" value="<?php echo $tampilkompetensi['nama_kepalasekolah']?>" type="text" class="form-control">
                                                        </div>
                                                        <br>
                                                        <h5 class="card-title" style="margin:0px;">Link Profil Kepala Sekolah</h5>
                                                        <small class="form-text" style="color: Tomato;">(Jika kepala sekolah memiliki akun Pusat Sekolah)</small><br>
                                                        <div class="input-group">
                                                            <input name="akunkepsek" value="<?php echo $tampilkompetensi['link_akunkepsek']?>" type="text" class="form-control">
                                                        </div>
                                                        <br>
                                                    <div class="clearfix">
                                                        <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                        <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Tampilkan</button>
                                                    </div>
                                            </div>
                                            <div class="tab-pane" id="tab-eg8-6" role="tabpanel">
                                                <h5 class="card-title">Sejarah Sekolah</h5>
                                                <textarea id="ckeditor" name="sjrhs" type="text" style="height: 500px; width: 640px"><?php echo $tampilkompetensi['sejarah_sekolah']?></textarea>
                                                <br>
                                                <div class="clearfix">
                                                    <button type="button" id="reset-btn22" class="btn-shadow float-left btn btn-link">Reset</button>
                                                    <button type="submit" class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Tampilkan</button>
                                                </div>
                                            </div>
                                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#provinsi").change(function (){
                            var url = "<?php echo site_url('p_sekolah/add_ajax_kab');?>/"+$(this).val();
                            $('#kabupaten').load(url);
                            return false;
                        })
                        
                        $("#kabupaten").change(function (){
                            var url = "<?php echo site_url('p_sekolah/add_ajax_kec');?>/"+$(this).val();
                            $('#kecamatan').load(url);
                            return false;
                        })
            
                        $("#kecamatan").change(function (){
                            var url = "<?php echo site_url('p_sekolah/add_ajax_des');?>/"+$(this).val();
                            $('#desa').load(url);
                            return false;
                        })
                    });
                </script>

<script type='text/javascript' src='<?php echo base_url(); ?>assets/template/js/plugins/ckeditor/ckeditor.js'></script>

<script>
var ckeditor = CKEDITOR.replace('sjrhs',{
height:'290px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('sjrhs');
</script>