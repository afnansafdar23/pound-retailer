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

            $validatedData = $request->validated();

            // Find the existing setting or create a new one
            $setting = Setting::updateOrCreate([], $validatedData);

            // Handle media for 'settings.logo'
            if (isset($request['setting_logo'])) {
                if ($setting->getFirstMedia('settings.logo')) {
                    dd($request->setting_logo);
                    $setting->clearMediaCollection('settings.logo');
                }
                $setting->addMedia(storage_path('tmp/uploads/' . $request['setting_logo']))->toMediaCollection('settings.logo');
            }

            // Handle media for 'settings.favicon'
            if (isset($request['settings_favicon'])) {
                if ($setting->getFirstMedia('settings.favicon')) {
                    $setting->clearMediaCollection('settings.favicon');
                }
                $setting->addMedia(storage_path('tmp/uploads/' . $request['settings_favicon']))->toMediaCollection('settings.favicon');
            }
            cache()->forget('settings');
            return redirect()->back()->withSuccess('Settings have been updated successfully!');
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }

    }
}
