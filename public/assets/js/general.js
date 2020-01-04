var defaultOpts = {
    totalPages: 1,
    prev: '&#8672;',
    next: '&#8674;',
    first: '&#8676;',
    last: '&#8677;',
};

function ImgError(source) {
    source.src = "assets/images/placeholder.jpg";
    source.onerror = "";
    return true;
}

function setToTable(d, columns = [], table, info) {
    /*Inisialisasi Header*/
    var tbl_head = "<tr>";
    $.each(columns, function (key, value) {
        tbl_head += "<th class='" + value.class + "'>" + value.name + "</th>";
    });
    tbl_head += "</tr>";

    /*Inisialisasi Body*/
    var tbl_body = "";
    $.each(d.data, function (key, value) {
        var tbl_row = "";
        if (columns.length == 0) {
            $.each(this, function (k, v) {
                tbl_row += "<td>" + v + "</td>";
            });
        } else {
            $.each(columns, function (k, v) {
                tbl_row += "<td class='" + v.class + "' style='"+v.style+"'>" + v.render(value) + "</td>";
            });
        }
        tbl_body += "<tr>" + tbl_row + "</tr>";
    });
    $(table + " thead").html(tbl_head);
    $(table + " tbody").html(tbl_body);
    /*Insialisasi Info*/
    tooltipStyle(table);
    fancyboxStyle(table);
    $(info).html("Menampilkan " + (d.from == null ? "0" : d.from) + " - " + (d.to == null ? "0" : d.to) + " dari " + (d.total == null ? "0" : d.total));
}

function createDialog(id, content, maximize = false, zindex = 1041) {
    $("<div id='" + id + "-dialog' data-autoheight data-subs='0'>" + content + "</div>").dialog({
        width: "70%",
    }).dialogExtend({
        "maximizable": true,
        "dblclick": "maximize",
        "icons": {
            "maximize": "icon-square-up-right",
            "restore": "icon-square-down-left",
        }, "maximize": function (evt) {
            $('#' + id + '-dialog').css({'height': 'auto', 'overflow': 'hidden'});
        }, "restore": function (evt) {
        }
    });
    $('#' + id + '-dialog').parent().before("<div id='overlay-" + id + "' class='ui-widget-overlay' style='z-index: " + (zindex - 1) + "'></div>");
    $('#overlay-' + id).block({message: null});
    $('#' + id + '-dialog').on('dialogclose', function (event) {
        $('#' + id + '-dialog').remove();
        $('#overlay-' + id).unblock();
        $('#overlay-' + id).remove();
    });

    if (maximize)
        $('#' + id + '-dialog').dialogExtend("maximize");

    $('#' + id + '-dialog').addClass("no-padding");
    $('[aria-describedby="' + id + '-dialog"]').css("z-index", zindex);
    $(".overlay").css("display", "block");
}

function autoHeight(element) {
    $.each($(element).find("[data-autoheight]"), function (index, el) {
        var $selector = $(el),
            scroll = $selector.data("scroll") === undefined ? false : $selector.data("scroll"),
            drag = $selector.data("drag") === undefined ? false : $selector.data("drag"),
            subs = $selector.data("subs") === undefined ? 137 : $selector.data("subs"),
            autoheight = window.innerHeight - parseInt(subs);
        if (drag == true) {
            var option = {
                touchbehavior: true,
                usetransition: true,
                hwacceleration: true
            };
        } else {
            var option = {
                cursorwidth: "8px"
            };
        }
        $selector.attr("style", "height:" + autoheight + "px;" + "padding:0px !important;");
        if (scroll === true) {
            $selector.niceScroll(option);
        }
    });
}

function contentAutoHeight(element, scroll = true, drag = false, substract = 137) {
    //default substract adalah Kalkulasi Height dari Top Navigation (Header) + Tab Title + Footer
    var contentHeight = $(document).height() - substract;
    if (drag == true) {
        var option = {
            touchbehavior: true,
            usetransition: true,
            hwacceleration: true,
        };
    } else {
        var option = "";
    }
    $(element).attr("style", "height:" + contentHeight + "px;" + "padding:0px;");
    if (scroll == true) {
        $(element).niceScroll(option);
    }
}

function generalProgress(title) {
    var cur_value = 1,progress;
    // Make a loader.
    new PNotify({
        title: title,
        text: '<div class="progress progress-striped active" style="margin:0">\
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">\
            <span class="sr-only">0%</span>\
            </div>\
            </div>',
        addclass: 'stack-bottom-left bg-success',
        icon: 'icon-spinner4 spinner',
        hide: false,
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        before_open: function(PNotify) {
            progress = PNotify.get().find("div.progress-bar");
            progress.width(cur_value + "%").attr("aria-valuenow", cur_value).find("span").html(cur_value + "%");

            // Pretend to do something.
            var timer = setInterval(function() {
                if (cur_value >= 100) {
                    // Remove the interval.
                    window.clearInterval(timer);
                    loader.remove();
                    return;
                }
                cur_value += 1;
                progress.width(cur_value + "%").attr("aria-valuenow", cur_value).find("span").html(cur_value + "%");
            }, 65);
        }
    });
}

function generalSpinner(el, state) {
    if (state)
        el.block({
            message: '<i class="icon-spinner2 spinner"></i>',
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                width: '100%',
                border: 0,
                'padding-top': '10px',
                backgroundColor: 'none'
            }
        });
    else
        el.unblock();
}

function generalNotify(title, text, type = 'success') {
    new PNotify({
        title: title,
        text: text,
        addclass: 'bg-' + type + ' alert-styled-right',
        type: type
    });
}

function selectStyle(element) {
    $.each($(element).find('.select2'), function (index, obj) {
        var size = 'select-xs',
            search = $(this).attr("data-search"),
            clear = $(this).attr("data-clear"),
            data = search == "true" ? "" : -1;

        $(this).select2({
            minimumResultsForSearch: data,
            containerCssClass: size,
            allowClear: clear
        }).on("change", function () {
            if ($(this).val() !== "") {
                $(this).valid();
            }
        }).focusout(function () {
            console.log("TES");
        });
    });
}

function radioStyle(element, type = 'choice') {
    $(element).find('[type=radio].styled').uniform({
        radioClass: type
    });
}

function checkStyle(element, type = 'choice') {
    $(element).find('[type=checkbox].styled').uniform({
        radioClass: type
    });
}

function switchery(element) {
    $.each($(element).find('[type=checkbox].switchery'), function (index, el) {
        var renderStatus = $(el).data("switchery");
        if (renderStatus !== true) {
            var switchery = new Switchery(el);
        }
    });
}

function switchWithLabel(element) {
    $(element).find(".switch").bootstrapSwitch();
}

function fancyboxStyle(element){
    $(element).find('[data-popup="lightbox"]').fancybox({
        padding: 3
    });
}
function contextMenu(element) {
    $.each($(element).find("[data-contextmenu]"), function (index, el) {
        var $selector = $(el),
            options = $selector.data("contextmenu")[0];
        var menu = new BootstrapMenu('[data-contextmenu]', options);
    });
}

function getInputFilterToObject(el) {
    var filter = {};
    $("#" + el + " :input").each(function (index, elm) {
        if (elm.name != "") {
            filter[elm.name] = elm.value;
        }
    });
    return filter;
}

function setFormValidation(el, url, confirm = "Yakin Ingin Menyimpan!") {
    $(el).validate({
        submitHandler: function () {
            jCustomConfirm(confirm, "Confirm", "Iya", "Tidak", function (r) {
                if (r) {
                    var $form = $(el);
                    formData = new FormData(),
                        params = $form.serializeArray();
                    $.each(params, function (i, val) {
                        formData.append(val.name, val.value);
                    });

                    if ($form.find('[type="file"]').length != 0) {
                        $inputs = $form.find('[type="file"]');
                        $.each($inputs, function (i, input) {
                            files = $form.find('[type="file"]')[i].files;
                            names = $($form.find('[type="file"]')[i]).attr("name");
                            $.each(files, function (i, file) {
                                formData.append(names, file);
                            });
                        });
                    }

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: formData,
                        cache: true,
                        contentType: false,
                        processData: false,
                        enctype: "multipart/form-data",
                        success: function (response) {
                            if (response.status == 200) {
                                $.each(response.callback.html, function (index, val) {
                                    $("#" + index).html(val);
                                });
                                $.each(response.callback.action, function (index, val) {
                                    eval(val);
                                });
                            }
                        },
                        beforeSend: function () {
                            generalSpinner($(el).parent(), true)
                        },
                        complete: function () {
                            generalSpinner($(el).parent(), false);
                        },
                        error: function (xhr, thrownError, err) {
                            if (xhr.responseJSON.status == 422) {
                                generalNotify('', xhr.responseJSON.message, 'danger');
                            }
                            generalSpinner($(el).parent(), false);
                        }
                    });
                }
            });
        }
    });
}

function containerHeight() {
    var availableHeight = $(window).height() - $('body > .navbar').outerHeight() - $('body > .navbar-fixed-top:not(.navbar)').outerHeight() - $('body > .navbar-fixed-bottom:not(.navbar)').outerHeight() - $('body > .navbar + .navbar').outerHeight() - $('body > .navbar + .navbar-collapse').outerHeight();
    $('.page-container').attr('style', 'min-height:' + availableHeight + 'px');
}

function collapsePanel(element) {
    $(element).find('.panel [data-action=collapse]').click(function (e) {
        e.preventDefault();
        var $panelCollapse = $(this).parent().parent().parent().parent().nextAll();
        $(this).parents('.panel').toggleClass('panel-collapsed');
        $(this).toggleClass('rotate-180');
        containerHeight(); // recalculate page height
        $panelCollapse.slideToggle(150);
    });
}

function datepicker(element) {
    $.each($(element).find("[datepicker]"), function (index, el) {
        var format = $(this).attr("date-format"),
            maxdate = $(this).attr("date-maxdate"),
            mindate = $(this).attr("date-mindate");
        $(this).datetimepicker({
            format: format,
            locale: 'id',
        });
    });
}

function clockpicker(element) {
    $.each($(element).find(".clockpicker"), function (index, el) {
        $(el).clockpicker();
    });
}

function tooltipStyle(element) {
    $(element).find("[title]").tooltip({
        trigger: 'hover',
        placement: 'bottom',
        container: 'body'
    });
}

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

function styleMask(element) {
    $.each($(element).find('.mask'), function (index, obj) {
        var digits = $(this).data('digits') == "" ? 2 : $(this).data('digits');
        console.log(digits);
        $(this).inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: digits,
            autoGroup: true,
            rightAlign: true,
        });
    });
}

//Set Default Fungsi pada Modul Panel
function initDefault(element = null) {
    $('[data-toggle="tooltip"], .tooltip').tooltip("hide");

    // fix for ie11
    if (/rv:11.0/i.test(navigator.userAgent)) {
        $(document).on('blur', '.select2-search__field', function (e) {
            select2_open.select2('close');
        });
    }
    if (element == null) {
        var getParent = document.scripts[document.scripts.length - 1],
            element = getParent.parentNode;
    } else {
        try {
            element = document.getElementById(element);
            element = element.parentNode;
        } catch (e) {
            var getParent = document.scripts[document.scripts.length - 1],
                element = getParent.parentNode;
        }
    }

    autoHeight(element);
    collapsePanel(element); //Collapse panel
    selectStyle(element);
    radioStyle(element);
    checkStyle(element);
    datepicker(element);
    tooltipStyle(element);
    switchery(element);
    switchWithLabel(element); //Switch With Label
    contextMenu(element);//ContextMenu
    styleMask(element);
    clockpicker(element);
}
