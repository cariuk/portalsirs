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

    var rincian{{$module}} = function (el) {

        var request = {
            NAME: $(el).attr("report-name"),
            PARAMETER: {
                "PTAGIHAN" : $(el).data("tagihan"),
                "PSTATUS" : 1
            },
            TYPE: print ? $(el).attr("report-type") : "Pdf",
            EXT: print ? $(el).attr("report-ext") : "pdf",
            PRINT_NAME: $(el).attr("print-name"),
            COPIES: $(el).attr("print-copies"),
            REQUEST_FOR_PRINT: false
        };
        $.ajax({
            url: "{{route('dashboard.tagihan')}}",
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
                "name" : "Tanggal Pemeriksaan",
                "class" : "col-xs-8 text-left",
                "render" : function (data) {
                    return data.TANGGAL+" <br />"+data.NOSEP
                }
            }, {
                "name"  : "#",
                "class" : "col-xs-4 text-center",
                "style" : "overflow: unset;",
                "render"    : function (data) {
                    var button =
                        '<button type="button" class="btn btn-primary btn-icon">\n' +
                            '<i class="icon-menu7"></i> Cetak Hasil\n' +
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