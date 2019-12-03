<style>
    #main-tabs{
        position: relative;
        white-space: nowrap;
        height: 42px;
        margin-bottom: 0px;
    }
    #main-tabs li a#tabhome{
        padding-right: 15px;
    }
    #main-tabs li:first-child a{
        padding-right: 15px;
    }

    #main-tabs li a{
        padding-right: 20px;
    }
</style>
<div class="panel" style="border:0px;">
    <div class="panel-body main-panel" style="padding: 5px;">
        <div class="tabbable">
            <ul id="main-tabs" class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a id="tab-home" href="#left-icon-tab-home" data-toggle="tab" aria-expanded="true"><i class="icon-home"></i></a>
                </li>
            </ul>
            <div class="tab-content tab-content-main">
                <div class="tab-pane active scrollbarV" id="left-icon-tab-home">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
<script id="{{microtime(true)}}">
    $(function(){
        $("#main-tabs").niceScroll({
            touchbehavior:true,
            cursoropacitymax:0,
            usetransition:true,
            hwacceleration:true,
            autohidemode:true
        });
    });
    function refreshtab() {
        var tabs = $( "#main-tabs" );
        $(".close-tabs").click(function (e) {
            var id = $(this).parent().attr('id');
            $( this ).closest( "li" ).remove();
            $("#left-icon-"+id).remove();
            tabs.children('li').last().children('a').click();
            tabs.tabs().tabs( "refresh" );
        });
    }


</script>
</div>
