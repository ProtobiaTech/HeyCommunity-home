<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class SettingController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return redirect('/dashboard/setting/tenant-info');
    }

    /**
     *
     */
    public function tenantInfo()
    {
        $assign['tenant'] = Auth::user();
        return view('dashboard.setting.tenant-info', $assign);
    }

    /**
     *
     */
    public function editTenantInfo()
    {
        $assign['tenant'] = Auth::user();
        return view('dashboard.setting.edit-tenant-info', $assign);
    }

    /**
     *
     */
    public function updateTenantInfo(Request $request)
    {
        $this->validate($request, [
            'site_name'         =>      'required|min:2',
        ]);

        $Tenant = Auth::user();
        $Tenant->site_name = $request->site_name;

        if ($Tenant->save()) {
            return redirect('/dashboard/setting/tenant-info');
        } else {
            return back()->withInput();
        }
    }
}
