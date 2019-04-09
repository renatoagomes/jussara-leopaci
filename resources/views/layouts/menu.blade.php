<br>

<li class="{{ Request::is('homepages*') ? 'active' : '' }}">
    <a href="{!! route('homepages.index') !!}"><i class="fa fa-globe"></i><span>Pagina inicial</span></a>
</li>


<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-file-text"></i><span>Posts do blog</span></a>
</li>

<li class="{{ Request::is('perinatals*') ? 'active' : '' }}">
    <a href="{!! route('perinatals.index') !!}"><i class="fa fa-heart"></i><span>Pagina perinatal</span></a>
</li>


<li class="{{ Request::is('perinatals*') ? 'active' : '' }}">
    <a href="{!! route('perinatals.index') !!}"><i class="fa fa-edit"></i><span>Perinatals</span></a>
</li>

