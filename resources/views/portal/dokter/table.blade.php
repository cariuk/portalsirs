<ul class="pagination pull-right twbs-pagination"></ul>
<br /><hr />
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr class="border-double">
            <th>#</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Akun</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody class="datatable">

        </tbody>
    </table>
</div>
<script>
    function loadpage(cari){
        $.ajax({
            url: '{{url('portal/dokter/loadpage')}}',
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


    });
</script>