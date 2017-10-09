<div class="sidebar-content">
    <!-- User menu -->
    <div class="sidebar-user">
        <div class="category-content">
            <div class="media">
                <a href="#" class="media-left"><img src="{{url('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
                <div class="media-body">
                    <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
                    <div class="text-size-mini text-muted">
                        <i class="icon-credit-card2 text-size-small"></i> &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
        <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">
                <!-- Main -->
                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                <li><a id="home" href="{{url('portal/home')}}" class="navigator"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                <li><a id="notif" href="{{url('portal/home')}}" class="navigator"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
            </ul>
            <ul class="navigation navigation-main navigation-accordion">
                <!-- My Ananda Hospital -->
                <li class="navigation-header"><span>My Ananda Hospital</span> <i class="icon-menu" title="Main pages"></i></li>
                <li><a id="akun" href="{{url('portal/akun')}}" class="navigator"><i class="fa fa-users"></i> <span>Data Akun</span></a></li>
                <li><a id="rawatjalan" href="{{url('portal/rawatjalan')}}" class="navigator"><i class="fa fa-list-ol"></i> <span>Rawat Jalan</span></a></li>
                <li><a id="slidegambar" href="{{url('portal/slidegambar')}}" class="navigator"><i class="fa fa-image"></i> <span>Slide Gambar</span></a></li>
            </ul>

            <ul class="navigation navigation-main navigation-accordion">
                <!-- Portal Ananda Hospital -->
                <li class="navigation-header"><span>Portal Ananda Hospital</span> <i class="icon-menu" title="Main pages"></i></li>
                <li><a id="dokter" href="{{url('portal/dokter')}}" class="navigator"><i class="fa fa-user-md"></i> <span>Data Dokter</span></a></li>
                <li><a id="jadwal" href="{{url('portal/jadwal')}}" class="navigator"><i class="fa fa-calendar"></i> <span>Jadwal Praktek</span></a></li>
            </ul>

            <ul class="navigation navigation-main navigation-accordion">
                <!-- Pengaturan -->
                <li class="navigation-header"><span>Pengaturan</span> <i class="icon-menu" title="Main pages"></i></li>
                <li><a id="userapps" href="{{url('portal/userapps')}}" class="navigator"><i class="fa fa-user"></i> <span>User</span></a></li>
            </ul>
        </div>
    </div>
    <!-- /main navigation -->
</div>

<script>
    $(document).ready(function(){
        var menu = window.location.href.replace("{{url('/portal')}}/","");
        $(window).on('popstate', function() {
            var menu = window.location.href.replace("{{url('/portal')}}/","");
            console.log(menu);
            $("#"+menu).trigger("click");
        });

        $(".navigator").click(function(){
            var block = $(".value-content").parent().parent(),menu=$(this).attr('href');
            $(".navigation li").removeClass("active");
            $(this).parent().addClass("active");
            $.ajax({
                url		: menu,
                type	: "GET",
                contentType: "application/json; charset=utf-8",
                datatype: "json",
                success	: function(response){
                    if (response.status == 200){
                        $(".value-content").html(response.content);
                    }else if (response.status==401) {
                        window.location.replace(response.direct);
                    }
                    $(block).unblock();
                },
                beforeSend: function () {
                    $(block).block({
                        message: '<i class="icon-spinner2 spinner"></i>',
                        overlayCSS: {
                            backgroundColor: '#d1cdcf',
                            opacity: 0.8,
                            cursor: 'wait',
                            'box-shadow': '0 0 0 1px #ddd'
                        },
                        css: {
                            border: 0,
                            padding: 0,
                            backgroundColor: 'none'
                        }
                    });
                },
                complete: function () {},
                error:function(xhr,thrownError,err){
                    $(block).unblock();
                }
            });
            history.pushState(null, null,window.location.href);
            history.replaceState({},"{{url('/')}}",$(this).attr("href"));
            return false;
        });
    });
</script>
