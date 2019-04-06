<div class='btn-group'>
    @if ( $post->status == \App\Models\Post::STATUS_EM_REVISAO )
    {!! Form::open(['url' => '/posts/'.$id.'/listagem']) !!}
        {!! Form::button('<i class="fa fa-arrow-up"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-info btn-xs',
            'onclick' => "return confirm('Publicar esse post?')",
            'title' => 'Publicar esse post?'
        ]) !!}
    {!! Form::close() !!}
    @else
    {!! Form::open(['url' => '/posts/'.$id.'/listagem']) !!}
        {!! Form::button('<i class="fa fa-arrow-down"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-warning btn-xs',
            'onclick' => "return confirm('Remover esse post da listagem?')",
            'title' => 'Remover esse post da listagem?'
        ]) !!}
    {!! Form::close() !!}
@endif
</div>


<div class='btn-group'>
    <a href="/blog/{{$post->slug}}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
</div>
<div class='btn-group'>
    <a href="{{ route('posts.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
</div>
<div class='btn-group'>
{!! Form::open(['route' => ['posts.destroy', $id], 'method' => 'delete']) !!}
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    {!! Form::close() !!}
</div>
