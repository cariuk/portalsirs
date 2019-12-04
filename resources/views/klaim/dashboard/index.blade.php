<div class="panel panel-flat no-margin">
    <div class="panel-body" style="padding: 5px;">
        <form id="filter{{$module}}">
            <div class="col-xs-2 no-padding">
                <select name="pelayanan" class="select2">
                    <option value="2">Rawat Jalan</option>
                    <option value="1">Rawat Inap</option>
                </select>
            </div>
            <div class="col-xs-2">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                    <input name="tanggalPulang" datepicker="datetime"
                           date-format="YYYY-MM-DD" type="text" class="form-control input-xs text-center"
                           placeholder="[Tgl. Plng (thn/bln/tgl)]">
                </div>
            </div>
            <div class="col-xs-2">
                <input name="norm" autocomplete="off" autocorrect="off" type="text" class="form-control input-xs" placeholder="NORM Pasien" value="" />
            </div>
            <div class="col-xs-4 no-padding">
                <input name="q" autocomplete="off" autocorrect="off" type="text" class="form-control input-xs" placeholder="Nama Pasien / No SEP" value="" />
            </div>
            <div class="col-xs-2 text-right no-padding">
                <button type="button" class="btn btn-info btn-labeled btn-xs" onclick="loaddata{{$module}}()"><b><i class="icon-filter4"></i></b> Filter</button>
                <button type="reset" class="btn btn-info btn-labeled btn-xs" onmouseup="loaddata{{$module}}()"><b><i class="icon-eraser2"></i></b> Clear</button>
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
        var data = $(el).data();
        requestPrint(el,{
            "PTAGIHAN" : data.tagihan,
            "PSTATUS" : 1
        },"{{route('dashboard.tagihan')}}",false);
    };

    $(document).ready(function () {
        loaddata{{$module}}();
    });

    function loaddata{{$module}}() {
        var columns = [
            {
                "name" : "Info SEP",
                "class" : "col-xs-2 text-left",
                "render" : function (data) {
                    return data.TANGGAL+" <br />"+data.NOSEP
                }
            },
            {
                "name" : "Info Pasien",
                "class" : "col-xs-4",
                "render"    : function (data) {
                    return data.NORM+" - "+data.NAMA;
                }
            },
            {
                "name" : "INACBG",
                "class" : "col-xs-3",
                "render"    : function (data) {
                    return data.CODECBG;
                }
            },
            {
                "name"  : "#",
                "class" : "col-xs-2 text-center",
                "style" : "overflow: unset;",
                "render"    : function (data) {
                    var button =
                        '<div class="btn-group">\n' +
                            '<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown">\n' +
                                '<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>\n' +
                            '</button>'+
                                '<ul class="dropdown-menu dropdown-menu-right" style="z-index: 10000;">\n' +
                                    '<li>' +
                                        '<a href="#" data-tagihan="'+data.TAGIHAN+'" report-name="pembayaran.CetakRincianPasien" report-type="Pdf" report-ext="pdf" print-name="CetakRincian" class="cetak-tagihan" onclick="rincian{{$module}}(this)">Rincian Billing</a>' +
                                    '</li>\n' +
                                '</ul>\n' +
                        '</div>';
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