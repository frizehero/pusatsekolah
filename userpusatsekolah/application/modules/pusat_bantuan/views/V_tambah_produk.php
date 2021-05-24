<div class="tab-content">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH PRODUK SEKOLAH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('produk/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Nama Produk</label>
                        <input name="nama" id="exampleEmail" placeholder=". . . . ." type="text" class="form-control">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
</div>