<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('referenciaPosts*') ? 'active' : '' }}">
    <a href="{!! route('referenciaPosts.index') !!}"><i class="fa fa-edit"></i><span>Referencia Posts</span></a>
</li>

