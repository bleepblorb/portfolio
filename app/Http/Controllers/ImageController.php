<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


class ImageController extends Controller
{

  function portrait(Request $request) {
    $baseUrl = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix() . 'public/portrait/';
  //
    $input = $request->except('_token');
    $defaults = [
      'facialHair' => 'clean',
      'expression' => 'nuetral',
      'background' => 'none',
      'hair' => 'defualt'
    ];
    $portrait = array_merge( $defaults, $input );
    ksort($portrait);

    // convert array to hash
    $decode = json_encode($portrait);
    $hash = md5($decode);
    $filename = 'portrait-'.$hash.'.jpg';


    // If cached version doesnt exits, generate new image
    if(!Storage::exists('public/portrait/cache/'.$filename)) {
      // Generate Image
      $img =  Image::canvas(1500, 974, '#f5f5f5');

      // Background
      // call to db
      $bg = DB::table('portrait_backgrounds')
              ->where('name', '=', $portrait['background'])
              ->value('filename');

      // Insert result
      if($bg) {
        $img->insert($baseUrl.$bg);
      }

      // Facial Expression
      $expression = DB::table('portrait_faces')
              ->where('expression', '=', $portrait['expression'])
              ->value('filename');

      if($expression) {
        $img->insert($baseUrl.$expression);
      }

      // Facial Hair
      $facialHair = DB::table('portrait_beards')
              ->where('style', '=', $portrait['facialHair'])
              ->value('filename');

      if($facialHair) {
        $img->insert($baseUrl.$facialHair);
      }

      if(!Storage::exists('public/portrait/cache')) {
        Storage::makeDirectory('public/portrait/cache');
      }
      // Save generted image to the cache
      $img->save($baseUrl.'cache/'.$filename);
    }

    // return URL to location
    return asset('storage/portrait/cache/'.$filename);
  }
}
