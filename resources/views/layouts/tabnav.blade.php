<li id="menu-{{$module}}" class="contextmenu">
    <a id="tab-{{$module}}{{isset($data)?$data->peg_id:""}}" href="#left-icon-tab-{{$module}}{{isset($data)?$data->peg_id:""}}" data-toggle="tab" aria-expanded="true">
        <i class="{{isset($data)?($data->peg_jenis_kelamin=="L"?$icon[0]:$icon[1]):$icon}} position-left"></i> {{strtoupper($module)}} {{isset($data)?$data->peg_id:""}}
        <span class="close close-tabs"><i class="icon-cancel-circle2"></i></span>
    </a>
</li>

<script>
    var menu1 = [
        {'Tutup':function(menuItem,menu) {
                jConfirm("Anda yakin menutup halaman ini?","SIRSPRO RSIA ANANDA",function (r) {
                    if(r){
                        $(menu.target).find(".close-tabs").click();
                    }
                });
            }
        },
        {'Tutup semua kecuali halaman ini':function(menuItem,menu) {
                jConfirm("Anda yakin menutup semua halaman kecuali halaman ini?","SIRSPRO RSIA ANANDA",function (r) {
                    if(r){
                        var data = $(menu.target).parents("#main-tabs").find(".close-tabs");
                        $.each(data,function (i,item) {
                            if($(menu.target).attr("id")!==$(item).parents("li").attr("id")){
                                $(item).click();
                            }
                        });

                    }
                });
            }
        },
        $.contextMenu.separator,
        {'Tutup semua':function(menuItem,menu) {
                jConfirm("Anda yakin menutup semua halaman?","SIRSPRO RSIA ANANDA",function (r) {
                    if(r){
                        var data = $(menu.target).parents("#main-tabs").find(".close-tabs");
                        $.each(data,function (i,item) {
                            $(item).click();
                        });
                    }
                });
            }
        }
    ];

    $("body").find(".context-menu").parents("table").remove();
    $(".contextmenu").contextMenu(menu1,{theme:'vista'});
</script>
