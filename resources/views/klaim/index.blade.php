<div class="tab-pane" id="left-icon-tab-{{$module}}">
    <div class="col-sm-1 no-padding">
        <div class="sidebar-secondary sidebar-default">
            <div class="sidebar-content scrollbarV" data-autoheight data-scroll="true" data-subs="150">
                <!-- Sub navigation -->
                <ul id="navigation-{{$module}}" class="navigation navigation-alt navigation-accordion no-padding">
                    {{--<li>--}}
                        {{--<a id="dashboard" class="sub-menu-{{$module}} text-center"--}}
                           {{--href="{{route('dashboard')}}"><span><i class="icon-file-presentation"></i></span>--}}
                            {{--<hr>--}}
                            {{--Dashboard</a>--}}
                    {{--</li>--}}
                    <li>
                        <a id="data" class="sub-menu-{{$module}} text-center"
                           href="{{route('data')}}"><span><i class="icon-file-spreadsheet"></i></span>
                            <hr>
                            Data</a>
                    </li>
                </ul>
                <!-- /sub navigation -->
            </div>
        </div>
        <script id="{{time()}}index{{$module}}">
            initDefault("{{time()}}index{{$module}}");
            $(function () {
                var ajaxSubMenu{{$module}};

                $(".sub-menu-{{$module}}").click(function () {
                    var title = $(this).html().replace('<hr>', '');
                    $("#navigation-{{$module}}").children("li").removeClass("active");
                    $(this).parent().addClass("active");
                    $.ajax({
                        url: $(this).attr("href"),
                        type: "GET",
                        dataType: "json",
                        success: function (response) {
                            if (response.status == 200) {
                                $(".subContent{{$module}}").parent().find('legend .title').html(title);
                                $(".subContent{{$module}}").html(response.subcontent);
                            } else if (response.status == 401) {
                                window.location.replace(response.direct);
                            }
                            refreshtab();
                        }, beforeSend: function (jqXHR) {
                            if (ajaxSubMenu{{$module}} !== undefined)
                                ajaxSubMenu{{$module}}.abort();

                            ajaxSubMenu{{$module}} = jqXHR;
                        },
                        complete: function (jqXHR) {
                        },
                        error: function (xhr, thrownError, err) {
                            if (xhr.responseJSON.status == 422) {
                                generalNotify('', xhr.responseJSON.message, 'danger');
                            }
                        }
                    });
                    return false;
                });
                $("#navigation-{{$module}} li").first().children().click();
            });
        </script>
    </div>
    <div class="col-sm-11 no-padding">
        <fieldset class="content-group no-padding no-margin">
            <legend class="text-bold no-margin" style="padding:5px;">
                <div class="title"><i class=""></i></div>
            </legend>
        </fieldset>
        <div class="content subContent{{$module}} no-padding">
        </div>
    </div>
</div>