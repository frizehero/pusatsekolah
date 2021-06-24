<div class="tab-content">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH PRODUK SEKOLAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <a href="<?php echo base_url('produk'); ?>">&times;</a>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('produk/tambah') ?>" method="POST" enctype="multipart/form-data">
            <input name="id" value="<?php echo $idsekolah['id_sekolah']?>" type="hidden" class="form-control">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Nama Produk</label>
                        <input name="nama" id="exampleEmail" placeholder=". . . . ." type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Kategori Produk</label>
                            <select name="kategori_produk" id="exampleSelect" class="form-control">
                                <option>Makanan</option>
                                <option>Minuman</option>
                                <option>Kerajinan</option>
                                <option>Lainnya</option>
                            </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Deskripsi Produk</label>
                        <input name="deskripsi" id="exampleEmail" placeholder=". . . ." type="text" class="form-control">
                    </div>
                    <label for="exampleEmail" class="">Harga Produk</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="harga" type="number" class="form-control">
                    </div>
                    <br>
                    <div class="card mb-3 widget-content bg-primary">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">UPLOAD FOTO PRODUK</div>
                                <div class="widget-subheading">File upload maximal 2 Mb</div>
                                <input name="foto" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('produk'); ?>" class="mb-0,5 mr-1 btn btn-shadow btn-success">batal</a>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
</div>