<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\SettingUpdateRequest;
use App\Models\Setting;
use App\Utils\ImageUplad;

class settingController extends Controller
{
    public function index(){
        return view('dashboard.settings.index');
    }

    public function update(SettingUpdateRequest $request, Setting $setting){


        $setting->update($request->validated());

        // upload image

        if ($request->has('logo')) {
            $logo = ImageUplad::uploadImage($request->logo, 300, 100);
            $setting->update([ 'logo' => $logo ]);
        }


        if ($request->has('favicon')) {
            $favicon = ImageUplad::uploadImage($request->favicon, 30, 30,'fav/');
            $setting->update(['favicon' => $favicon]);
        }

        return redirect()->route('dashboard.setting.index')->with(['success'=>'updated successfully']);
    }
}
