<ul id="section-sidenav" class="nav nav-pills nav-stacked" role="tablist">
    <li class="{{ Request::is('*/setting/tenant-info*') ? 'active' : '' }}"><a href="{{ url('/dashboard/setting/tenant-info') }}">Tenant Info</a></li>
    <li class="{{ Request::is('*/setting/edit-tenant-info*') ? 'active' : '' }}"><a href="{{ url('dashboard/setting/edit-tenant-info') }}">Edit Tenant Info</a></li>
</ul>
