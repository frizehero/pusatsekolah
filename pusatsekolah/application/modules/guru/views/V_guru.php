 <div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-12 col-md-9 p-0 mb-3">
                    <div class="search-wrapper active">
                        <div class="input-holder" style="background-color: #fff;">
                            <?php echo form_open('data_guru/search') ?>
                                    <input type="text" name="nama" class="search-input" placeholder="Cari...">
                                    <button class="search-icon" style="background-color: #fff;"><span></span></button>
                                <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <div class="mb-2 mr-2 btn-group">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle btn btn-primary">Filter
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                            <div class="form-check">
                                <div class="form-check">
                                    <?php
                                        foreach($mapel_data->result_array() as $row)
                                        {
                                         
                                        ?>
                                            <div class="list-group-item checkbox"> 
                                                <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['mapel_guru']; ?>"  > <?php echo $row['mapel_guru']; ?></label>
                                            </div>
                                        <?php 
                                        } 
                                        ?>
                                    ccccc
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <a href="<?php echo base_url('data_guru/tambahview'); ?>" class="btn btn-shadow btn-wide btn-primary">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Tambah Guru
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <br />
            <div align="center" id="pagination_link">

            </div>
            <br />
            <br />
            <br />
            <div class="row filter_data">
            
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

    filter_data(1);

    function filter_data(page)
    {
        $('.filter_data').html();
        var action = 'fetch_data';
        //var page = 1;
        var mapel = get_filter('mapel');
        $.ajax({
            url:"<?php echo base_url(); ?>guru/fetch_data/"+page,
            method:"POST",
            dataType:"JSON",
            data:{action:action, mapel:mapel,},
            success:function(data)
            {
                $('.filter_data').html(data.product_list);
                $('#pagination_link').html(data.pagination_link);
            }
        })
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $(document).on("click", ".pagination li a", function(event){
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        filter_data(page);
    });

    $('.common_selector').click(function(){
        filter_data(1);
    });



});
</script>