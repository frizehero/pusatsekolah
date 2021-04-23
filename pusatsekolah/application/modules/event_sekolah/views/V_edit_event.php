<div class="app-main__inner">
    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <?php tampilnotif()?>
                <form action="<?php echo base_url('event_sekolah/edit') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" value="<?php echo $tampil['id_event']?>" type="hidden" class="form-control">
                    <div class="card-title">JUDUL EVENT</div>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" id="judul_event" name="judul_event" value="<?php echo $tampil['judul_event']?>" class="form-control">
                    </div>
                    <br>
                    <div class="card-title">DESKRIPSI EVENT</div>
                    <input id="ckeditor" name="text_event" value="<?php echo $tampil['text_event']?>" type="text" style="height: 800px;"></input>
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
    var ckeditor = CKEDITOR.replace('text_event', {
        height: '290px'
    });

    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
</script>