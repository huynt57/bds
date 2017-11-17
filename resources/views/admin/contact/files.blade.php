<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th> #</th>
        <th> Tệp đính kèm</th>
    </tr>
    </thead>
    <tbody>
    @if(is_array($files))
        @foreach($files as $file)
            <tr>
                <td> {{ $loop->index + 1 }} </td>
                <td><a href="{{ '/files/'.$file }}">{{ $file }}</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>