<div class="panel panel-flat no-margin">
    <div class="panel-body" style="padding: 5px;">
        <form id="filter{{$module}}">
            <div class="col-xs-6">
                <input name="tagihan" type="hidden" class="form-control input-xs" value="{{$request->tagihan}}" />
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
                <tbody class="scrollbarV" data-autoheight data-scroll="true" data-subs="300"></tbody>
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
                "PID" : $(el).data("operasi"),
            },
            TYPE: "Pdf",
            EXT: "pdf",
            PRINT_NAME: "HasilLaboratorium",
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
                "name" : "Tanggal Laporan",
                "class" : "col-xs-8 text-center",
                "render" : function (data) {
                    return data.TANGGAL_OPERASI
                }
            },{
                "name" : "Waktu Operasi",
                "class" : "col-xs-8 text-center",
                "render" : function (data) {
                    return data.MULAI_OPERASI+" - "+data.SELESAI_OPERASI
                }
            }, {
                "name"  : "#",
                "class" : "col-xs-4 text-center",
                "style" : "overflow: unset;",
                "render"    : function (data) {
                    var button =
                        '<button type="button" report-name="layanan.CetakHasilLab" data-opearsi="'+data.OPERASI+'" class="btn btn-primary btn-icon" onclick="hasillab{{$module}}(this)">\n' +
                            '<i class="icon-file-eye"></i> Cetak Laporan\n' +
                        '</button>';
                    return button;
                }
            },
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