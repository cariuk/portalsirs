<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Infeksi Phlebitis<small class="m-l-sm"></small></h5>
            </div>
            <div class="ibox-content">
                <div>
                    <div class="form-group" id="data_4">
                        <label class="font-noraml">Month select</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="tanggallaporan" type="text" class="form-control" value="<?php echo date("m/d/Y",strtotime(date("Y/m/")."1")); ?>">
                        </div>
                    </div>
                </div>
                <div id="datatable"></div>
            </div>
            <div class="ibox-footer">
                        <span class="pull-right">
                          The righ side of the footer
                    </span>
                This is simple footer example
            </div>
        </div>
    </div>
</div>

<script>
    function datatable(tanggal){
        $.ajax({
            url             : "<?=base_url()?>laporan/dataphlebitis",
            datatype        : 'json',
            data            : "tanggal="+tanggal,
            cache           : false,
            contentType     : false,
            processData     : false,
            success         : function(response) {
                var obj = jQuery.parseJSON(response);
                if (obj.success=="yes"){
                    $("#datatable").html(obj.html);
                }
            },
            error:function(xhr,thrownError,err){
                $("#errorcode").html(xhr.status);
                $("#err").html(err);
                $("#responseText").html(xhr.responseText);
                $("#ErrorModal").modal('show');
            }
        });
    };
    $(document).ready(function () {
        datatable("<?php echo date("m/d/Y",strtotime(date("Y/m/")."1")); ?>");
        $('#data_4 .input-group.date').datepicker({
            minViewMode: 1,
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            todayHighlight: true
        });

        $('#tanggallaporan').change(function() {
            datatable($(this).val());
        });
    });
</script>