<div class="row">
    <table class="table table-borderd table-striped">
        <tr>
            <th>timestamp</th>
            <th>ip</th>
            <th>user</th>
            <th>download</th>
            <th>upload</th>
            <th>ping</th>
            <th>subnet</th>
            <th>apname</th>
        </tr>
        @foreach($table as $row)
        <tr>
            <td>{{ $row->timestamp }}</td>
            <td>{{ $row->ip }}</td>
            <td>{{ $row->userid }}</td>
            <td>{{ $row->dl }}</td>
            <td>{{ $row->ul }}</td>
            <td>{{ $row->ping }}</td>
            <td>{{ $row->subnet }}</td>
            <td>{{ $row->apname }}</td>
        </tr>
        @endforeach()
    </table>
    <div class="d-flex justify-content-center">
        {!! $table->links() !!}
    </div>
</div>
    
