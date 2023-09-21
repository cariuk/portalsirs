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

    let Logo = "";

    $.ajax({
        url: "{{route("instansi")}}",
        type: "GET",
        dataType: "json",
        success: function (response) {
            var instansi = response.response;
            logo = '{{env("SIRSPRO")}}/images/'+instansi.LOGO;
        }, beforeSend: function (jqXHR) {},
        complete: function (jqXHR) {},
        error: function (xhr, thrownError, err) {}
    });

    var cetakHasilRadiologi = function (el) {
        var request = {
            NAME: $(el).attr("report-name"),
            PARAMETER: {
                "PFORMAT" : 1,
                "PTINDAKAN" : $(el).data("tindakan"),
                "PLOGO" : logo
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
                generalSpinner(spinner{{$module}},false);
            },
            beforeSend: function () {
                generalSpinner(spinner{{$module}},true);
            },
            complete: function () {
                generalSpinner(spinner{{$module}},false);
            },
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
                    return data.TANGGAL+" <br />"+data.NOMOR
                }
            }, {
                "name": "#",
                "class": "col-xs-2 text-right",
                "style": "overflow:unset;",
                "render": function (data) {
                    let menuItem = '<div class="btn-group">'
                    menuItem += '<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown">'
                    menuItem += '<i class="icon-menu7"></i> Hasil Rad &nbsp;<span class="caret"></span>'
                    menuItem += '</button>'
                    menuItem += '<ul class="dropdown-menu dropdown-menu-right" style="z-index: 10000;">'
                    $.each(data.DETAIL, function (key, value) {
                        menuItem += '<li>'
                        menuItem += '<a href="javascript:void(0)" data-nomor="' + data.NOMOR + '" data-tindakan="' + value.REF + '" report-name="layanan.CetakHasilRad" report-type="Pdf" report-EXT="pdf" print-name="CetakHasilLab" onclick="cetakHasilRadiologi(this)">'
                        menuItem += '<i class="med-medical-records"></i> &nbsp;'+value.NAMA+'</a>'
                        menuItem += '</li>'
                    });
                    menuItem += '</ul>'
                    menuItem += '</div>';
                    return menuItem;
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
