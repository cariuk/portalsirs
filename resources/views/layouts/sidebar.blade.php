<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">
            <li><a id="home" href="{{route('main')}}" class="menunavigator">
                    <i class="icon-home2"></i> <span>Beranda</span></a>
            </li>
            <li><a id="KLAIM" href="{{route('main.load.module',"klaim")}}" class="menunavigator">
                    <i class="icon-database2"></i> <span>Data Klaim BPJS</span></a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".menunavigator").click(function () {
            var tab = $(this).attr("id"),
                menu = $(this).attr('href'),
                tabnav = $("#tab-" + tab);

            if (tabnav.length == 1)
                $("#tab-" + tab).click();
            else {
                $.ajax({
                    url: menu,
                    type: "GET",
                    data: {
                        icon: $(this).children('i').attr("class")
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.status == 200) {
                            $("#main-tabs").append(response.tabnav);
                            $('.tab-content-main').append(response.tabcontent);
                            $("#tab-" + tab).click();
                        } else if (response.status == 401) {
                            window.location.replace(response.direct);
                        }

                        refreshtab();
                    },
                    beforeSend: function (jqXHR) {
                    },
                    complete: function (jqXHR) {
                    },
                    error: function (xhr, thrownError, err) {
                        if (xhr.responseJSON.status == 422) {
                            generalNotify('', xhr.responseJSON.message, 'danger');
                        }
                    }
                });
            }
            return false;
        });
    });
</script>
