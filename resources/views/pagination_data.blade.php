
@foreach($data as $row)
<tr>
    <td>{{ $row->ip}}</td>
    <td>{{ $row->userid }}</td>
    <td>{{ $row->subnet }}</td>
</tr>
@endforeach
<tr>
    <td colspan="3" align="center">
        {!! $data->links() !!}
    </td>
</tr>