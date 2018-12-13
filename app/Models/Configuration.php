<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Image;

class Configuration extends Model
{
    public static function updateGeneral($request)
    {
        $data        = self::find(1);
        $data->name  = $request->website_name;
        $data->email = $request->website_email;
        $path = public_path().'/uploads/logo/';
           
        if($request->hasFile('website_logo')){
            $file_name = $request->file('website_logo');
            $file = Image::make($file_name);
            // $file->resize(800, 800);
            $generated_filename = time().$file_name->getClientOriginalName();
            // $file->move($path, $generated_filename);
            $file->save($path.''.$generated_filename);
            $data->logo = $generated_filename;
        }
    
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
