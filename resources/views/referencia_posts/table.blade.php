<table class="table table-responsive" id="referenciaPosts-table">
    <thead>
        <tr>
            <th>Texto</th>
        <th>Link</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($referenciaPosts as $referenciaPost)
        <tr>
            <td>{!! $referenciaPost->texto !!}</td>
            <td>{!! $referenciaPost->link !!}</td>
            <td>
                {!! Form::open(['route' => ['referenciaPosts.destroy', $referenciaPost->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('referenciaPosts.show', [$referenciaPost->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('referenciaPosts.edit', [$referenciaPost->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>