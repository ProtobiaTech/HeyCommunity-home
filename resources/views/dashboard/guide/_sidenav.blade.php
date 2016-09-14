<ul id="section-sidenav" class="nav nav-pills nav-stacked" role="tablist">
    <li class="{{ Request::is('*/getting-started') ? 'active' : '' }}"><a href="{{ ('./getting-started') }}">Getting started</a></li>
    <li class="disabled {{ Request::is('*/null') ? 'active' : '' }}"><a d-href="{{ ('./user') }}">Wechat WebApp</a></li>
    <li class="disabled {{ Request::is('*/null') ? 'active' : '' }}"><a d-href="{{ ('./user') }}">Hybrid App</a></li>
</ul>
