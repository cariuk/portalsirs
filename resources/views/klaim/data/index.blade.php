<div class="panel panel-flat no-margin">
    <div class="panel-body" style="padding: 5px;">
        <form id="filter{{$module}}">
            <div class="col-xs-1 no-padding">
                <select name="pelayanan" class="select2">
                    <option value="2">Rawat Jalan</option>
                    <option value="1">Rawat Inap</option>
                </select>
            </div>
            <div class="col-xs-2">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                    <input name="bulanPulang" datepicker="datetime"
                           date-format="YYYY-MM" type="text" class="form-control input-xs text-center"
                           placeholder="[Tgl. Plng (thn/bln)]" value="{{date("Y-m")}}">
                </div>
            </div>
            <div class="col-xs-2">
                <input name="norm" autocomplete="off" autocorrect="off" type="text" class="form-control input-xs" placeholder="NORM Pasien" value="" />
            </div>
            <div class="col-xs-2">
                <input name="cbg" autocomplete="off" autocorrect="off" type="text" class="form-control input-xs" placeholder="CBG" value="" />
            </div>
            <div class="col-xs-3 no-padding">
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

    var laboratorium{{$module}} = function (el) {
        $.ajax({
            url: "{{route('laboratorium')}}",
            data: $(el).data(),
            type: "GET",
            dataType: "json",
            success: function (response) {
                createDialog("laboratorium",response.subcontent);
            },
            beforeSend: function () {
            },
            complete: function () {
            },
        });
    };
    var berkas{{$module}} = function (el) {
        $.ajax({
            url: "{{route('berkas')}}",
            data: $(el).data(),
            type: "GET",
            dataType: "json",
            success: function (response) {
                createDialog("berkas",response.subcontent,true);
            },
            beforeSend: function () {},
            complete: function () {},
        });
    };
    var downloadBerkas{{$module}} = function (el) {
        var url = "{{route('berkas.zip')}}"
        $.ajax({
            url: "{{route('berkas.zip')}}",
            data: $(el).data(),
            type: "GET",
            dataType: "json",
            success: function (response) {
                window.location(response);
            },
            beforeSend: function () {},
            complete: function () {},
        });
    };
    var sep{{$module}} = function (el) {
        var request = {
            NAME: $(el).attr("report-name"),
            PARAMETER: {
                "PSEP" : $(el).data("nosep"),
            },
            TYPE: print ? $(el).attr("report-type") : "Pdf",
            EXT: print ? $(el).attr("report-ext") : "pdf",
            PRINT_NAME: $(el).attr("print-name"),
            COPIES: $(el).attr("print-copies"),
            REQUEST_FOR_PRINT: false
        };
        $.ajax({
            url: "{{route($module.'.sep')}}",
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
            url: "{{route($module.'.tagihan')}}",
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
    var individual{{$module}} = function (el) {
        var data = $(el).data();
        $.ajax({
            url: "{{route($module.'.individual')}}",
            data: data,
            type: "GET",
            dataType: "json",
            success: function (response) {
                window.open(response.url, '_blank');
            },
            beforeSend: function () {},
            complete: function () {},
        });
    };
    var operasi{{$module}} = function (el) {
        $.ajax({
            url: "{{route('operasi')}}",
            data: $(el).data(),
            type: "GET",
            dataType: "json",
            success: function (response) {
                createDialog("opearsi",response.subcontent);
            },
            beforeSend: function () {
            },
            complete: function () {
            },
        });
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
                "style" : "white-space: normal;",
                "render"    : function (data) {
                    return data.CODECBG+" - "+data.CODECBG_DESKRIPSI;
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
                                        '<a href="#" data-nosep="'+data.NOSEP+'" onclick="individual{{$module}}(this)">'+'<i class="icon-magazine"></i>'+'Lembar Individual</a>' +
                                    '</li>\n' +
                                    '<li>' +
                                        '<a href="#" data-nosep="'+data.NOSEP+'" report-name="bpjs.CetakESEP" report-type="Pdf" report-ext="pdf" print-name="CetakRincian" class="cetak-tagihan" onclick="sep{{$module}}(this)">'+'<i class="icon-file-eye"></i>'+'E-SEP</a>' +
                                    '</li>\n' +
                                    '<li>' +
                                        '<a href="#" data-tagihan="'+data.TAGIHAN+'" report-name="pembayaran.CetakRincianPasien" report-type="Pdf" report-ext="pdf" print-name="CetakRincian" class="cetak-tagihan" onclick="rincian{{$module}}(this)">'+'<i class="icon-file-eye"></i>'+'Rincian Billing</a>' +
                                    '</li>\n' +
                                    '<li>' +
                                        '<hr>'+
                                    '</li>\n' +
                                    '<li>' +
                                        '<a href="#" data-nopen="'+data.NOPEN+'" data-norm="'+data.NORM+'" data-nama="'+data.NAMA+'" onclick="berkas{{$module}}(this)">'+'<i class="icon-books"></i>'+'Lihat Berkas</a>' +
                                    '</li>\n' +
                                    '<li>' +
                                        '<a href="{{route("berkas.zip")}}?nopen='+data.NOPEN+'&norm='+data.NORM+'&nama='+data.NAMA+'" target="_blank">'+'<i class="icon-file-download"></i>'+'Donwload Berkas</a>' +
                                    '</li>\n' +
                                    '<li>' +
                                        '<hr>'+
                                    '</li>\n' +
                                    '<li>' +
                                        '<a href="#" data-tagihan="'+data.TAGIHAN+'" data-norm="'+data.NORM+'" data-nama="'+data.NAMA+'" onclick="laboratorium{{$module}}(this)">'+'<i class="fa fa-flask"></i>'+'Laboratorium</a>' +
                                    '</li>\n' +
                                    '<li>' +
                                        '<a href="#" data-tagihan="'+data.TAGIHAN+'" data-norm="'+data.NORM+'" data-nama="'+data.NAMA+'" onclick="operasi{{$module}}(this)">'+'<i class="med-examination"></i>'+'Laporan Operasi</a>' +
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
