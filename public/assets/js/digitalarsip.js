// Global Custom javascript function for SIMRS
function daemon(url, params, interval = 2000) {
    $.ajax({
        url: url,
        data: params,
        type: "GET",
        dataType: "json",
        success: function (response) {
            return response;
        },
        beforeSend: function () {
        },
        complete: function () {
            setTimeout(function () {
                daemon(url, params, interval);
            }, interval);
        },
        error: function (xhr, thrownError, err) {
            if (xhr.readyState == 4) {
                if (xhr.status == 401) {
                    location.reload();
                }
            } else if (xhr.readyState == 0) {
                location.reload();
            }
        }
    });
}

function getPegawai(url, data) {
    $.ajax({
        url: url,
        data: data,
        type: "GET",
        dataType: "json",
        success: function (res) {
            if (res.status == 200) {
                var data = res.response.data;
                $("#main-tabs").append(res.tabnav);
                $('.tab-content-main').append(res.tabcontent);
                $('#tab-data' + parseInt(data.peg_id)).click();
                refreshtab();
            }
        },
        beforeSend: function () {
        },
        complete: function (jqXHR) {
        },
        error: function (xhr, thrownError, err) {
            if (xhr.responseJSON.status == 422) {
                generalNotify('', xhr.responseJSON.message, 'warning');
            } else {
                generalNotify('', xhr.responseJSON.message, 'warning');
            }
        }
    });
}

function getData(module,url,columns,pagination,spinner) {
    var filter = getInputFilterToObject('filter'+module);
    $.ajax({
        url: url,
        data: filter,
        type: "GET",
        dataType: "json",
        success: function (r) {
            if (r.status == 200) {
                response = r.response;
                setToTable(response,columns,"#table-"+module,$("#info-"+module));
                if (pagination.data("twbs-pagination")) {
                    pagination.twbsPagination('destroy');
                }
                pagination.twbsPagination($.extend({}, defaultOpts, {
                    startPage: 1,
                    totalPages: response.last_page==null?0:response.last_page,
                    visiblePages: 5,
                    prev: '&#8672;',
                    next: '&#8674;',
                    first: '&#8676;',
                    last: '&#8677;'
                })).on('page', function (evt, page) {
                    filter["page"] = page;
                    $.ajax({
                        url: url,
                        data: filter,
                        type: "GET",
                        dataType: "json",
                        success: function (r) {
                            if (r.status == 200) {
                                response = r.response;
                                setToTable(response,columns,"#table-"+module,$("#info-"+module));
                            }
                        },beforeSend: function () {
                            generalSpinner(spinner,true);
                        },complete: function () {
                            generalSpinner(spinner,false);
                        },error: function (xhr, thrownError, err) {
                            if (xhr.responseJSON.status == 422) {
                                generalNotify('', xhr.responseJSON.message, 'danger');
                            }
                            generalSpinner(spinner,false);
                        }
                    });
                });
            }
        },
        beforeSend: function () {
            generalSpinner(spinner,true);
        },
        complete: function () {
            generalSpinner(spinner,false);
        },
        error: function (xhr, thrownError, err) {
            if (xhr.responseJSON.status == 422) {
                generalNotify('', xhr.responseJSON.message, 'danger');
            }
            generalSpinner(spinner,false);
        }
    });
}

function setValueSelect(url, el, params, defvalue = null, defitem = "ID", defDeskripsi = "DESKRIPSI") {
    $.ajax({
        url: url,
        data: params,
        type: "GET",
        dataType: "json",
        success: function (response) {
            if (response.status == 200) {
                var row = '<option></option>';
                $(el).append(row);
                $.each(response.data, function (i, item) {
                    row = '<option value="' + item[defitem] + '">' + item[defDeskripsi] + '</option>';
                    $(el).append(row)
                });


                if (defvalue != null) {
                    if (defvalue == "first")
                        $(el).val(response.data[0][defitem]).trigger("change");
                    else
                        $(el).val(defvalue).trigger("change");
                }

                if (response.data.length == 1) {
                    $(el).find('option:eq(1)').prop('selected', true).trigger("change");
                }
            }
        },
        beforeSend: function () {
            $(el).val("").trigger("change");
        },
        complete: function () {
        },
        error: function (xhr, thrownError, err) {
            if (xhr.responseJSON.status == 422) {
                generalNotify('', xhr.responseJSON.message, 'warning');
            } else {
                generalNotify('', xhr.responseJSON.message, 'warning');
            }
        }
    });
}

function getTglToUmur(tanggal) {
    var startDate = moment(tanggal);
    var endDate = moment(new Date());
    var b = endDate.diff(startDate, 'days');
    return {
        thn: Math.floor(b / 365),
        bln: Math.floor((b % 365) / 30),
        hr: Math.floor((b % 365) % 30)
    }
}

function requestPrint(el, params, url, print = true) {
    var request = {
        NAME: $(el).attr("report-name"),
        PARAMETER: params,
        TYPE: print ? $(el).attr("report-type") : "Pdf",
        EXT: print ? $(el).attr("report-ext") : "pdf",
        PRINT_NAME: $(el).attr("print-name"),
        COPIES: $(el).attr("print-copies"),
        REQUEST_FOR_PRINT: print
    };
    $.ajax({
        url: url,
        data: request,
        type: "GET",
        dataType: "json",
        success: function (response) {
            if (response.status == 200) {
                if (request.REQUEST_FOR_PRINT)
                    window.location.assign(response.service + ":" + response.content);
                else {
                    createDialog("laporan",
                        '<embed id="embed-pdf" src="' + response.url + '" />',
                        true,
                        1045
                    );
                    contentAutoHeight("#embed-pdf", true, true, 25);
                    $("#embed-pdf").attr("width", "100%");
                }
            }
        },
        beforeSend: function () {
        },
        complete: function () {
        },
        error: function (xhr, thrownError, err) {
            if (xhr.responseJSON.status == 422) {
                generalNotify('', xhr.responseJSON.message, 'warning');
            } else {
                generalNotify('', xhr.responseJSON.message, 'warning');
            }
        }
    });
}