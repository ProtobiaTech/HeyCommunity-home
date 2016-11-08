<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;

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

    /**
     *
     */
    public function wechatPa()
    {
        $assign['tenant'] = Auth::user();
        return view('dashboard.setting.wechat-pa', $assign);
    }

    /**
     *
     */
    public function editWechatPa()
    {
        $assign['tenant'] = Auth::user();
        return view('dashboard.setting.edit-wechat-pa', $assign);
    }

    /**
     *
     */
    public function updateWechatPa(Request $request)
    {
        $this->validate($request, [
            'enable_wechat_pa'  =>  'required',
            'wx_app_id'         =>  'required_if:enable_wechat_pa,1|min:15',
            'wx_app_secret'     =>  'required_if:enable_wechat_pa,1|min:20',
            'wx_temp_notice_id' =>  'required_if:enable_wechat_pa,1|min:35',
            'wx_verify_file'    =>  'max:1'
        ]);

        $Tenant = Auth::user();
        $Tenant->enable_wechat_pa = $request->enable_wechat_pa;
        $Tenant->info->wx_app_id = $request->wx_app_id;
        $Tenant->info->wx_app_secret = $request->wx_app_secret;
        $Tenant->info->wx_temp_notice_id = $request->wx_temp_notice_id;

        // save verify file
        if ($request->hasFile('wx_verify_file')) {
            $path = env('WECHAT_PA_VERIFY_FILE_PATH', '/var/www/');
            $file= $request->file('wx_verify_file');
            $file->move($path, $file->getClientOriginalName());
        }

        $Tenant->save();
        $Tenant->info->save();
        return redirect('/dashboard/setting/wechat-pa');
    }

    /**
     *
     */
    public function wechatNotice()
    {
        $assign['tenant'] = Auth::user();
        return view('dashboard.setting.wechat-notice', $assign);
    }

    /**
     *
     */
    public function editWechatNotice()
    {
        $assign['tenant'] = Auth::user();
        return view('dashboard.setting.edit-wechat-pa', $assign);
    }

    /**
     *
     */
    public function administrator()
    {
        $assign['administrators'] = User::where(['is_admin' => 1])->get();
        return view('dashboard.setting.administrator', $assign);
    }

    /**
     *
     */
    public function addAdministrator()
    {
        return view('dashboard.setting.add-administrator');
    }

    /**
     *
     */
    public function searchAdministratorHandler(Request $request)
    {
        $this->validate($request, [
            'id_or_phone'       =>      'min:1',
        ]);

        $assign = [];
        if ($request->has('id_or_phone')) {
            $request->flash();
            $assign['users'] = User::where(['id' => $request->id_or_phone])->orWhere('phone', '=', $request->id_or_phone)->get();
        }
        return view('dashboard.setting.search-administrator', $assign);
    }

    /**
     *
     */
    public function addAdministratorHandler(Request $request)
    {
        $this->validate($request, [
            'id'                =>      'required|min:1',
        ]);

        $User = User::findOrFail($request->id);
        $User->is_admin = true;
        $User->save();
        return redirect()->to('/dashboard/setting/administrator');
    }

    /**
     *
     */
    public function destroyAdministratorHandler(Request $request)
    {
        $this->validate($request, [
            'id'                =>      'required|min:1',
        ]);

        $User = User::findOrFail($request->id);
        $User->is_admin = false;
        $User->save();
        return redirect()->to('/dashboard/setting/administrator');
    }
}
