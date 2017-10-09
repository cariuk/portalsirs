@foreach($data as $row)
    <tr>
        <td>
            {{$row->IDDOKTER}}
        </td>
        <td>
            {{$row->GELAR_DEPAN.". ".$row->NAMA.", ".$row->GELAR_BELAKANG}}
            <br/>
            <span class="label border-left-info label-striped">NIP : {{$row->NIP}}</span>
        </td>
        <td>
            {{$row->DESKRIPSI}}
        </td>
        <td>
            @if($row->STATUS=1)
                <span class="label label-flat border-success text-success-600">Aktif</span>
            @else
                <span class="label label-flat border-danger text-danger-600">Non Aktif</span>
            @endif
        </td>
        <td>
            <button id="{{$row->IDDOKTER}}" type="button" class="btn btn-success btn-labeled btn-sm izin"><b><i class="icon-list"></i></b> Izin</button>
            <button id="{{$row->IDDOKTER}}" type="button" class="btn btn-primary btn-labeled btn-sm jadwal"><b><i class="icon-calendar3"></i></b> Jadwal</button>
            <button id="{{$row->IDDOKTER}}" type="button" data-toggle="modal" data-target="#modal_form" class="btn btn-danger btn-labeled btn-sm akun"><b><i class="icon-user-lock"></i></b> Akun</button>
        </td>
    </tr>
@endforeach
<script>
    $(document).ready(function(){
        $(".akun").click(function(){
           var id = $(this).attr("id");
            $.ajax({
                url: '{{url('portal/dokter/akun')}}',
                type : "GET",
                data: {
                    "id":id
                },
                datatype: "json",
                success : function(data) {
                    $("#modal_form .modal-title").html(data.title);
                    $("#modal_form .modal-body").html(data.body);
                }
            });
        });
    });
</script>