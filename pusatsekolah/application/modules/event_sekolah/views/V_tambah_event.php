<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="<?php echo base_url('event_sekolah/tambah') ?>" method="POST" enctype="multipart/form-data">
                	<div class="card-title">JUDUL EVENT</div>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" id="judul_event" name="judul_event" placeholder="" class="form-control">
                    </div>
                    <br>
                    <div class="card-title">DESKRIPSI EVENT</div>
                	<textarea id="ckeditor" name="text_event" type="text" style="height: 800px;"></textarea>
                	<br>
                	<div class="form-group">
                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='<?php echo base_url(); ?>assets/template/js/plugins/ckeditor/ckeditor.js'></script>

<script>
var ckeditor = CKEDITOR.replace('text_event',{
height:'290px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>