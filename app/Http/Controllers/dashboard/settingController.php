<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function update(SettingUpdateRequest $request){

        return $request;
    }
}
