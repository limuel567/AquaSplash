<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Image, File;

class Configuration extends Model
{
    public static function updateGeneral($request)
    {
        $data        = self::find(1);
        $data->name  = $request->website_name;
        $data->email = $request->website_email;
        $path = public_path().'/uploads/logo/';
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }   
           
        if($request->hasFile('website_logo')){
            $file_name = $request->file('website_logo');
            $file = Image::make($file_name);
            $generated_filename = $file_name->getClientOriginalName();
            // $file->move($path, $generated_filename);
            $file->save($path.''.$generated_filename);
            $data->logo = $generated_filename;
        }
    
        $data->contact_number = $request->contact_number;
        $data->address = $request->address;
        $data->copyright = $request->copyright;
        $data->save();
        return $data;
    }
  
    public static function updateSocialLinks($request)
    {
        $social_links = [
                            'facebook'    => $request->facebook_link,
                            'instagram'   => $request->instagram_link
                        ];
        $data = self::find(1);
        $data->social_media_links = serialize($social_links);
        $data->save();
    }
}
