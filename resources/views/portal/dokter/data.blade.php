@foreach($data as $row)
    <tr>
        <td>
            {{$row->IDDOKTER}}
        </td>
        <td>
            {{$row->GELAR_DEPAN.". ".$row->NAMA.", ".$row->GELAR_BELAKANG}}
        </td>
        <td>
            {{$row->DESKRIPSI}}
        </td>
    </tr>
@endforeach