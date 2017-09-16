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
                <li><a href="{{url('portal')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
            </ul>
            <ul class="navigation navigation-main navigation-accordion">
                <!-- My Ananda Hospital -->
                <li class="navigation-header"><span>My Ananda Hospital</span> <i class="icon-menu" title="Main pages"></i></li>
                <li><a href="{{url('portal')}}"><i class="fa fa-users"></i> <span>Data Akun</span></a></li>
                <li><a href="{{url('portal')}}"><i class="fa fa-list-ol"></i> <span>Rawat Jalan</span></a></li>
                <li><a href="{{url('portal')}}"><i class="fa fa-image"></i> <span>Slide Gambar</span></a></li>
            </ul>

            <ul class="navigation navigation-main navigation-accordion">
                <!-- Portal Ananda Hospital -->
                <li class="navigation-header"><span>Portal Ananda Hospital</span> <i class="icon-menu" title="Main pages"></i></li>
                <li><a id="dokter" href="{{url('portal/dokter')}}" class="navigator"><i class="fa fa-user-md"></i> <span>Data Dokter</span></a></li>
                <li><a href="{{url('portal')}}"><i class="fa fa-calendar"></i> <span>Jadwal Praktek</span></a></li>
            </ul>
        </div>
    </div>
    <!-- /main navigation -->
</div>

<script>
    $(document).ready(function(){
        $(".navigator").click(function(){
            $menu = $(this).attr("id");

        });
    });
</script>
