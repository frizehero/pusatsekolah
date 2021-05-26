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
                                        </ul>
                                </div>
                                <div class="col-md-8">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                                <form action="<?php echo base_url('p_sekolah/edit') ?>" method="POST" enctype="multipart/form-data">
                                                    <input name="id" value="<?php echo $tampilkompetensi['id_p_sekolah']?>" type="hidden" class="form-control">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleFile" class="">Foto Profil</label>
                                                            <input name="fotoprofil" type="file" class="form-control-file">
                                                            </small>
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
                                                                    <option>Pilih Provinsi</option>
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
                                                                    <option value=''>Pilih Kota / Kab</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">Kecamatan</h5>
                                                                <select name="kec" class="form-control" id="kecamatan">
                                                                    <option>Pilih Kecamatan</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="card-title">Kelurahan</h5>
                                                                <select name="des" class="form-control" id="desa">
                                                                    <option>Pilih Kel / Desa</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="main-card mb-3 card">
                                                            <div class="card-body">
                                                                <div class="card-title">Tentukan Titik Koordinat</div>
                                                                <div id="gmap-example" style="width: 100%; height: 300px; position: relative; overflow: hidden;">
                                                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                                        <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                            <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                                                <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                            <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -182, -96);">
                                                                                                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                                                    <div style="width: 256px; height: 256px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                                                </div>
                                                                                                <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                                                </div>
                                                                                                <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                                                </div>
                                                                                                <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                                                </div>
                                                                                                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                        <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -182, -96);">
                                                                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                                                <img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17488!4i256!2m3!1e0!2sm!3i543269234!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;token=9144" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                            </div>
                                                                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                                                <img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17488!4i256!2m3!1e0!2sm!3i543269234!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;token=102853" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                            </div>
                                                                                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                                                <img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17487!4i256!2m3!1e0!2sm!3i543269234!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;token=105786" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                            </div>
                                                                                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                                                <img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17487!4i256!2m3!1e0!2sm!3i543269234!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;token=12077" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                            </div>
                                                                                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                                                <img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17487!4i256!2m3!1e0!2sm!3i543269222!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;token=9968" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                            </div>
                                                                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                                                <img draggable="false" alt="" role="presentation" src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17488!4i256!2m3!1e0!2sm!3i543269222!2m3!1e2!6m1!3e5!3m17!2sid-ID!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;token=7035" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                                    <p class="gm-style-pbt"></p>
                                                                                </div>
                                                                                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                                    <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                                            <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                                            <div>
                                                                                <div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;">
                                                                                    <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
                                                                                        <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                                                            <button draggable="false" title="Perbesar" aria-label="Perbesar" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                                                            </button>
                                                                                            <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                                            <button draggable="false" title="Perkecil" aria-label="Perkecil" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div></div>
                                                                            <div></div>
                                                                            <div></div>
                                                                            <div>
                                                                                <button draggable="false" title="Beralih ke tampilan layar penuh" aria-label="Beralih ke tampilan layar penuh" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                                                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;">
                                                                                </button>
                                                                            </div>
                                                                            <div></div>
                                                                            <div></div>
                                                                            <div></div>
                                                                            <div></div>
                                                                            <div>
                                                                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;">
                                                                                    <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                                                                        <div style="width: 40px; height: 40px;">
                                                                                            <button draggable="false" title="Putar peta 90 derajat" aria-label="Putar peta 90 derajat" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 18px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 18px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px; height: 18px;">
                                                                                            </button>
                                                                                            <button draggable="false" title="Miringkan peta" aria-label="Miringkan peta" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;">
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style="position: absolute; left: 0px; top: 0px;"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                                                    <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=-12.043333,-77.028333&amp;z=15&amp;t=m&amp;hl=id-ID&amp;gl=US&amp;mapclient=apiv3" title="Buka area ini di Google Maps (membuka jendela baru)" style="position: static; overflow: visible; float: none; display: inline;">
                                                                                        <div style="width: 66px; height: 26px; cursor: pointer;">
                                                                                            <img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div></div>
                                                                            <div>
                                                                                <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 311px; bottom: 0px; width: 87px;">
                                                                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                            <div style="width: 1px;"></div>
                                                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                        </div>
                                                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                                            <a style="text-decoration: none; cursor: pointer; display: none;">Data Peta</a>
                                                                                            <span>Data peta ©2021</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 222px; bottom: 0px;" draggable="false" class="gm-style-cc">
                                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                    <div style="width: 1px;"></div>
                                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                </div>
                                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                                    <span>200 m&nbsp;</span>
                                                                                    <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;">
                                                                                        <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                                                                                        <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
                                                                                        <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
                                                                                        <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                                                                                        <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
                                                                                        <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 123px; bottom: 0px;">
                                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                    <div style="width: 1px;"></div>
                                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                </div>
                                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                                    <a href="https://www.google.com/intl/id-ID_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Syarat Penggunaan</a>
                                                                                </div>
                                                                            </div>
                                                                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                    <div style="width: 1px;"></div>
                                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                </div>
                                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                                    <a target="_blank" rel="noopener" title="Laporkan kesalahan dalam peta jalan atau citra ke Google" dir="ltr" href="https://www.google.com/maps/@-12.043333,-77.028333,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Laporkan kesalahan peta</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 54px; top: 60px;">
                                                                            <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Data Peta</div>
                                                                            <div style="font-size: 13px;">Data peta ©2021</div>
                                                                            <button draggable="false" title="Tutup" aria-label="Tutup" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;">
                                                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;">
                                                                            </button>
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
                                                    <div class="card-body">
                                                        <div class="position-relative form-group">
                                                            <h5 class="card-title">Link Akun Kepala Sekolah</h5>
                                                        </div>
                                                    </div>
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