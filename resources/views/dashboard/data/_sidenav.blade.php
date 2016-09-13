<ul id="section-sidenav" class="nav nav-pills nav-stacked" role="tablist">
    <li class="{{ Request::is('*/timeline') ? 'active' : '' }}"><a href="{{ ('./timeline') }}">Timeline Data</a></li>
    <li class="{{ Request::is('*/user') ? 'active' : '' }}"><a href="{{ ('./user') }}">User Data</a></li>
</ul>
