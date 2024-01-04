<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\StoreUpdateSettingRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Setting $setting)
    {
        return view('admin.global_settings.index')->with(['setting' => $setting]);
    }

    /**
     * store the specified resource in storage.
     *
     * @param StoreUpdateSettingRequest $request
     * @return RedirectResponse
     */
    public function storeUpdateSetting(StoreUpdateSettingRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $this->updateSettings($data);
            return back()->withSuccess('Settings successfully updated');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }
}
