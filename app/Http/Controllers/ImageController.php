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

    $input = $request->except('_token');

    $defaults = [
      'facialHair' => 'clean',
      'expression' => 'neutral',
      'background' => 'none',
      'hair' => 'defualt',
      'hands' => 'default',
    ];
    $portrait = array_merge( $defaults, $input );
    ksort($portrait);

    // convert array to hash
    $decode = json_encode($portrait);
    $hash = md5($decode);
    $fileType = '.jpg';

    $filenameBase = 'portrait-'.$hash;
    $filenameXs = $filenameBase.'-xs'.$fileType;
    $filenameMd = $filenameBase.'-md'.$fileType;
    $filenameLg = $filenameBase.'-lg'.$fileType;
    $filenameXl = $filenameBase.'-xl'.$fileType;


    // If cached version doesnt exits, generate new image
    if(!Storage::disk('s3')->exists('public/portrait/'.$filenameXs)) {
      // Generate Image
      $img =  Image::canvas(2400, 1350, '#f5f5f5');

      // Background
      // call to db
      $bg = DB::table('portrait_backgrounds')
              ->where('name', '=', $portrait['background'])
              ->value('filename');

      // Insert result
      if($bg) {
        $img->insert($baseUrl.$bg);
      }

      // Base body
      $img->insert($baseUrl.'body_base.png', 'top-left', 248, 120);

      // Base Head
      $img->insert($baseUrl.'head_base.png', 'top-left', 828, 0);

      // Facial Expression
      $expression = DB::table('portrait_faces')
              ->where('expression', '=', $portrait['expression'])
              ->value('filename');

      if($expression) {
        $img->insert($baseUrl.$expression, 'top-left', 828, 0);
      }


      // Attire
      $attire = DB::table('portrait_attire')
              ->where('style', $portrait['attire'])
              ->get()
              ->first();

      if ( $attire ) {

        $portrait['hair'] = $attire->hair;
        $img->insert($baseUrl.$attire->filename, 'top-left', 248, 120);
      }

      // Hair
      $hair = DB::table('portrait_hair')
              ->where('style', '=', $portrait['hair'])
              ->value('filename');

      if($hair) {
        $img->insert($baseUrl.$hair, 'top-left', 828, 0);
      }


      // Arms
      $hands = DB::table('portrait_hands')
              ->where([
                ['attire', $portrait['attire']],
              ])
              ->get();

      if($hands) {
        // get active hand
        $mainHand = $hands->filter( function($hand) use ($portrait) {
          return $hand->position == $portrait['hands'];
        })->first();

        // get secondary hand
        $secondarySide = $mainHand->hand == 'left' ? 'right' : 'left';

        $secondaryHand = $hands->filter( function($hand) use ($secondarySide) {
          return ($hand->hand == $secondarySide && $hand->position == 'default');
        })->first();

        $img->insert($baseUrl.$secondaryHand->filename, 'top-left', 248, 120);
        $img->insert($baseUrl.$mainHand->filename, 'top-left', 248, 120);
      }

      $secondaryHand = DB::table('portrait_hands')
              ->where([
                ['attire', $portrait['attire']],
                ['position', 'default'],
                ['position', 'default']
              ])
              ->get()
              ->first();

      // Facial Hair
      $facialHair = DB::table('portrait_beards')
              ->where([
                ['style', '=', $portrait['facialHair']],
                ['expression', $portrait['expression']]
              ])
              ->value('filename');

      if ( $facialHair ) {
        $img->insert($baseUrl.$facialHair, 'top-left', 828, 0);
      }

      if(!Storage::disk('s3')->exists('public/portrait')) {
        Storage::disk('s3')->makeDirectory('public/portrait');
      }


      // Save generted images to storage

      // xs
      $xsImg = clone $img;
      $xsImg->crop(1800, 1350)->widen(576);
      Storage::disk('s3')->put('public/portrait/'.$filenameXs, $xsImg->stream()->__toString());

      // md
      $mdImg = clone $img;
      $mdImg->widen(1200);
      Storage::disk('s3')->put('public/portrait/'.$filenameMd, $mdImg->stream()->__toString());

      // xs
      Storage::disk('s3')->put('public/portrait/'.$filenameXl, $img->stream()->__toString());
    }

    // return URL to location
    // return asset('storage/portrait/cache/'.$filename);
    $urlList = [];
    $urlList['xs'] = Storage::disk('s3')->url('public/portrait/'.$filenameXs);
    $urlList['md'] = Storage::disk('s3')->url('public/portrait/'.$filenameMd);
    $urlList['lg'] = Storage::disk('s3')->url('public/portrait/'.$filenameXl);

    return json_encode($urlList);
  }
}
