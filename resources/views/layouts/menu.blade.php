<br>

<li class="{{ Request::is('homepages*') ? 'active' : '' }}">
    <a href="{!! route('homepages.index') !!}"><i class="fa fa-globe"></i><span>Pagina inicial</span></a>
</li>


<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-file-text"></i><span>Posts do blog</span></a>
</li>

<li class="{{ Request::is('perinatals*') ? 'active' : '' }}">
    <a href='/perinatals/1/edit'><i class="fa fa-heart"></i><span>Pagina perinatal</span></a>
</li>


