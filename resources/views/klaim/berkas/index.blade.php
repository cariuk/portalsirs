<div class="panel panel-flat no-margin">
    <div class="panel-body" style="padding: 5px;">
        <form id="filter{{$module}}">
            <div class="col-xs-6">
                <input name="nopen" type="hidden" class="form-control input-xs" value="{{$request->nopen}}" />
                <input name="status" type="hidden" class="form-control input-xs" value="1" />
                <input readonly type="text" class="form-control input-xs" placeholder="NORM Pasien" value="{{$request->norm}}" />
            </div>
            <div class="col-xs-6">
                <input readonly type="text" class="form-control input-xs" placeholder="Nama Pasien / No SEP" value="{{$request->nama}}" />
            </div>
        </form>
    </div>
</div>
<div class="panel panel-flat no-margin">
    <div class="panel-body no-padding">
        <div class="table-responsive">
            <table id="table-{{$module}}" class="table table-xxs table-hover fixed-table table-framed table-bordered">
                <thead style="width:100%;"></thead>
                <tbody class="scrollbarV" data-autoheight data-scroll="true" data-subs="150"></tbody>
                <tfoot style="width:100%;">
                <tr>
                    <td colspan="6" style="border-bottom: 0px; border-left:0px; border-right:0px;  " >
                        <div class="col-xs-9">
                            <ul class="pagination-flat pagination-xs twbs-pagination{{$module}}"></ul>
                        </div>
                        <div id="info-{{$module}}" class="col-xs-3 text-right" style="padding-top:5px;"></div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script id="{{time().$module}}">
    initDefault("{{time().$module}}");
    var spinner{{$module}} = $("#table-{{$module}}").parent().parent().parent();
    var pagination{{$module}} = $('.twbs-pagination{{$module}}');
    pagination{{$module}}.twbsPagination(defaultOpts);

    var hasillab{{$module}} = function (el) {
        var request = {
            NAME: $(el).attr("report-name"),
            PARAMETER: {
                "PNOMOR" : $(el).data("nomor"),
                "PFORMAT" : 1,
                "PTINDAKAN" : $(el).data("tindakan"),
                "KOP_HASIL_LAB" : "https://sirspro.anandahospital.co.id/images/kop_hasil_lab_1561115968.jpeg"
            },
            TYPE: "Pdf",
            EXT: "pdf",
            PRINT_NAME: "{{$module}}",
            COPIES: 1,
            REQUEST_FOR_PRINT: false
        };
        $.ajax({
            url: "{{route('laboratorium.report')}}",
            data: request,
            type: "GET",
            dataType: "json",
            success: function (response) {
                window.open(response.url, '_blank');
            },
            beforeSend: function () {},
            complete: function () {},
        });
    };

    $(document).ready(function () {
        loaddata{{$module}}();
    });

    function loaddata{{$module}}() {
        var columns = [
            {
                "name" : "Tanggal & Deskripsi",
                "class" : "col-xs-6 text-center",
                "render" : function (data) {
                    return "<label class='label label-info'>"+data.TANGGAL+"</label> <br />"+data.DESKRIPSI
                }
            },{
                "name" : "Document",
                "class" : "col-xs-6 text-left",
                "render" : function (data) {
                    return '<div class="thumbnail">\n' +
                    '                    <div class="thumb">\n' +
                    '                        <img src="{{route('berkas.file')}}?nopen='+data.NOPEN+'&file='+data.FILE+'" alt="">\n' +
                    '                        <div class="caption-overflow">\n' +
                    '                            <span>\n' +
                    '                                <a href="{{route('berkas.file')}}?nopen='+data.NOPEN+'&file='+data.FILE+'" target="_blank"'+
                    '                                   data-popup="lightbox" rel="gallery"\n' +
                    '                                   class="btn border-white text-white btn-flat btn-icon btn-rounded"><i\n' +
                    '                                            class="icon-zoomin3"></i></a>\n' +
                    '                            </span>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>';
                }
            }
        ];
        getData('{{$module}}',"{{route($module.'.loaddata')}}",columns,pagination{{$module}},spinner{{$module}});
    }

    $("#filter{{$module}} input").keypress(function (event) {
        if ( event.which == 13 ) {
            event.preventDefault();
            loaddata{{$module}}();
        }
    });
</script>