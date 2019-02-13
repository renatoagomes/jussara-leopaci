
<br>
<br>
<h4 style="color:white; text-align:center;"><strong>Área admin</strong></h4>
<br>
<hr>
<br>

<li class="{{ Request::is('homepages*') ? 'active' : '' }}">
    <a href="{!! route('homepages.index') !!}"><i class="fa fa-edit"></i><span>Informações da Homepage</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('referenciaPosts*') ? 'active' : '' }}">
    <a href="{!! route('referenciaPosts.index') !!}"><i class="fa fa-edit"></i><span>Referencia Posts</span></a>
</li>

