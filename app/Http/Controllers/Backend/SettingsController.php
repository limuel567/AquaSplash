<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Validators;
use App\Models\Configuration;
use App\Models\DefaultSetting;

use Auth;

class SettingsController extends Controller
{
    function getIndex()
    {
        $this->data['settings'] = Configuration::find(1);
        $this->data['user'] = Auth::user();
        $this->data['defaults'] = DefaultSetting::find(1);
        return view('admin.settings', $this->data);
    }

    function postGeneral(Request $request)
    {
        // Send all the request to validate
        $validator = Validators::backendValidate($request,"settings_general");
        // Check the validator if there's no error
        if ($validator === true) {
            $config = Configuration::UpdateGeneral($request);
            $admin = User::changeCredentials($request);
            return response()->json(["result" => 'success']);
        }
        return response()->json(["result" => 'failed', "errors" => $validator->errors()->messages()]);
    }

    function postSocial(Request $request)
    {
        // Send all the request to validate
        $validator = Validators::backendValidate($request,"settings_social");
        // Check the validator if there's no error
        if($validator === true){
            Configuration::UpdateSocialLinks($request);
            return response()->json(["result" => 'success']);
        }
        return response()->json(["result" => 'failed', "errors" => $validator->errors()->messages()]);
    }

    function postDefaultAvatar(Request $request)
    {
        $validator = Validators::backendValidate($request,"settings_avatar");
        if ($validator === true) {
            DefaultSetting::updateDefaultAvatar($request);
            return response()->json(["result" => 'success']);
        }
        return response()->json(["result" => 'failed', "errors" => $validator->errors()->messages()]);
    }

    function postDefaultCover(Request $request)
    {
        $validator = Validators::backendValidate($request,"settings_cover");
        if ($validator === true) {
            DefaultSetting::updateDefaultCover($request);
            return response()->json(["result" => 'success']);
        }
        return response()->json(["result" => 'failed', "errors" => $validator->errors()->messages()]);
    }

    function postEmail(Request $request)
    {
        // Send all the request to validate
        $validator = Validators::backendValidate($request,"configuration_email");
        // Check the validator if there's no error
        if ($validator === true) {
            $admin = User::UpdateEmail($request,Auth::user()->id);
            return response()->json(["result" => 'success']);
        }
        return response()->json(["result" => 'failed', "errors" => $validator->errors()->messages()]);
    }

    function postPassword(Request $request)
    {
        // Send all the request to validate
        $validator = Validators::backendValidate($request,"configuration_password");
        // Check the validator if there's no error
        if ($validator === true) {
            $admin = User::updateCredentials($request,Auth::user()->id);
            return response()->json(["result" => 'success']);
        }
        return response()->json(["result" => 'failed', "errors" => $validator->errors()->messages()]);
    }
}
