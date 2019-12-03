<ul class="pagination pull-right twbs-pagination"></ul>
<br /><hr />
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr class="border-double">
            <th>#</th>
            <th>Nama Lengkap</th>
            <th>Kontak</th>
            <th>Tanggal Pendaftaran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody class="datalist">

        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){
        var $pagination = $('.twbs-pagination');
        var defaultOpts = {
            totalPages: 1,
            prev: '&#8672;',
            next: '&#8674;',
            first: '&#8676;',
            last: '&#8677;',
        };
        $pagination.twbsPagination(defaultOpts);
        function loaddata(page,cari){
            $.ajax({
                url: '{{url('portal/akun/loaddata')}}',
                data: {
                    "page":page,
                    "cari":cari
                },
                type : "GET",
                datatype: "json",
                success : function(data){
                    $(".datalist").html(data.html);
                }
            });
        }
        function loadpage(cari){
            $.ajax({
                url: '{{url('portal/akun/loaddata')}}',
                data: {
                    "cari":cari
                },
                type : "GET",
                datatype: "json",
                success : function(response){
                    if ($pagination.data("twbs-pagination")) {
                        $pagination.twbsPagination('destroy');
                    }

                    $pagination.twbsPagination($.extend({}, defaultOpts, {
                        startPage: 1,
                        totalPages: response.total_page,
                        visiblePages: 8,
                        onPageClick: function (event, page) {
                            loaddata(page,cari);
                        }
                    }));
                }
            });
        }
        loadpage("")
    });
</script>