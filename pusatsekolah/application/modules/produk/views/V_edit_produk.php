<div class="tab-content">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT PRODUK SEKOLAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('produk/edit') ?>" method="POST" enctype="multipart/form-data">
            <input name="id" value="<?php echo $tampil['id_produk']?>" type="hidden" class="form-control">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Nama Produk</label>
                        <input name="nama" value="<?php echo $tampil['nama_produk']?>" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Kategori Produk</label>
                            <select name="kategori_prduk" value="<?php echo $tampil['kategori_produk']?>" class="form-control">
                                <option <?php if('Makanan' == $tampil['kategori_produk'] ){ echo 'selected="selected"'; } ?> value="Makanan">Makanan</option>
                                <option <?php if('Minuman' == $tampil['kategori_produk'] ){ echo 'selected="selected"'; } ?> value="Minuman">Minuman</option>
                                <option <?php if('kerajinan' == $tampil['kategori_produk'] ){ echo 'selected="selected"'; } ?> value="kerajinan">kerajinan</option>
                                <option <?php if('Dan Lain - Lain' == $tampil['kategori_produk'] ){ echo 'selected="selected"'; } ?> value="Dan Lain - Lain">Dan Lain - Lain</option>
                            </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Deskripsi Produk</label>
                        <input name="deskripsi" value="<?php echo $tampil['deskripsi_produk']?>" type="text" class="form-control">
                    </div>
                    <label for="exampleEmail" class="">Harga Produk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="harga" value="<?php echo $tampil['harga_produk']?>" type="text" class="form-control">
                    </div>
                    <br>
                    <div class="card mb-3 widget-content bg-primary">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">UPLOAD FOTO PRODUK</div>
                                <div class="widget-subheading">File upload maximal 2 Mb</div>
                                <input name="foto" value="<?php echo $tampil['foto_produk']?>" type="file">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>