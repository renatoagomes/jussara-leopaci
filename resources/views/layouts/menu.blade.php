<br>

<li class="{{ Request::is('homepages*') ? 'active' : '' }}">
    <a href="{!! route('homepages.index') !!}"><i class="fa fa-globe"></i><span>Página inicial</span></a>
</li>



<li class="{{ Request::is('perinatals*') ? 'active' : '' }}">
    <a href='/perinatals/1/edit'><i class="fa fa-heart"></i><span>Página perinatal</span></a>
</li>


<li class="{{ (Request::is('*posts*') || Request::is('*blog*')) ? 'active' : '' }} treeview">
    <a href="/admin/blog/foto">
        <i class="fa fa-file-text"></i> <span>Blog</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ (Request::is('*posts*') || Request::is('*blog*')) ? 'active' : '' }}">
            <a href="/admin/blog/foto">
                <i class="fa fa-circle-o"></i> Foto de Capa</a></li>
        <li class="{{ (Request::is('*posts*') || Request::is('*blog*')) ? 'active' : '' }}">
            <a href="/posts">
                <i class="fa fa-circle-o"></i> Posts
            </a>
        </li>
    </ul>
</li>
