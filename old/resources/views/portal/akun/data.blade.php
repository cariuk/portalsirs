@foreach($data as $row)
    <tr>
        <td>
            {{$row->id}}
        </td>
        <td>
            {{$row->username}}
        </td>
        <td>
            Email : {{$row->email}}<br/>
            Nomot Tlp : {{$row->nomor_tlp}}
        </td>
        <td>
            {{$row->created_at}}
        </td>
        <td>
            {{$row->verification}}
        </td>
    </tr>
@endforeach