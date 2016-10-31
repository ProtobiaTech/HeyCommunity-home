<ul id="section-sidenav" class="nav nav-pills nav-stacked" role="tablist">
    <li class="{{ Request::is('*/setting/*tenant-info*') ? 'active' : '' }}"><a href="{{ url('/dashboard/setting/tenant-info') }}">Tenant Info</a></li>
    <li class="{{ Request::is('*/setting/*wechat-pa*') ? 'active' : '' }}"><a href="{{ url('/dashboard/setting/wechat-pa') }}">WeChat PA</a></li>
    <li class="hide {{ Request::is('*/setting/*wechat-notice*') ? 'active' : '' }}"><a href="{{ url('/dashboard/setting/wechat-notice') }}">WeChat Notice</a></li>
</ul>
