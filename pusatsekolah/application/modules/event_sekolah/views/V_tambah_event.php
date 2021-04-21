<div class="app-main__inner">
                <div class="tab-content">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form>
                            <textarea id="ckeditor" name="tamevent" style="height: 800px;"><?php echo $tamevent;?></textarea>
                            </form>
                        </div>
                    </div>
                </div>
</div>

<script type='text/javascript' src='<?php echo base_url(); ?>assets/template/js/plugins/ckeditor/ckeditor.js'></script>

<script>
var ckeditor = CKEDITOR.replace('tamevent',{
height:'600px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>