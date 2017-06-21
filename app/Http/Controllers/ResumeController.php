<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;

class ResumeController extends Controller
{

  protected $baseModel = [
    'model' => [
      'intro' => [
        'introStyle' => '',
        'personal' => [],
        'togglerPoem' => [
          'index' => 0,
          'value' => ''
        ],
        'togglerIntro' => [
          'index' => 0,
          'value' => ''
        ],
      ],
      'portrait' => [
        'expression' => 'neutral',
        'facialHair' => '',
        'hair' => 'standard',
        'background' => '',
        'attire' => 'base',
        'hands' => 'default',
      ],
      'portraitUrls' => [
      ]
    ],
    'state' => [
      'currentStep' => 1,
      'currentPhase'=> 0,
      'furthestAllowed' => 0,
      'completedSteps' => 0,
      'isComplete' => false,
      'editMode' => false,
      'previewMode' => false,
      'readerMode' => false,
      'tourComplete' => false,
    ]
  ];

  protected function createCookie() {
    $name = "resume_data";
    $minutes = 20;
    $id = Uuid::generate()->string;
    $data = json_encode($this->baseModel);


    // Generate Database storage for user
    DB::table('user_cookies')->insert([
      'id' => $id,
      'resume_data' => $data,
      'last_visited' => Carbon::now(),
    ]);

    return cookie($name, $id , $minutes);
  }

  // Get fresh Resume object
  public function getFresh(Request $request) {


    $cookie = $request->cookie('resume_data');

    if ( $cookie ) {
      $data = DB::table('user_cookies')
        ->where('id', '=', $cookie)
        ->update(['resume_data' => json_encode($this->baseModel)]);
    }
    else {
      $cookie = $this->createCookie();
    }
    return response()->json($this->baseModel)->cookie($cookie);
  }

  public function open(Request $request) {
    // Generate Database storage for user

    $cookie = $request->cookie('resume_data');
    // return $request->cookie('resume_data');
    if ( $cookie ) {

      $data = DB::table('user_cookies')
        ->where('id', '=', $cookie)
        ->value('resume_data');

        return response()->json(json_decode($data));
    } else {
      return response()->json(['error' => 'No saved file found'], 412);
    }

  }

  public function save(Request $request) {
    // Generate Database storage for user
    //
    $cookie = $request->cookie('resume_data');
    // return $request->cookie('resume_data');
    if ( $request->model && $request->state ) {
      $data = [
        'model' => $request->model,
        'state' => $request->state
      ];

      DB::table('user_cookies')
        ->where('id', '=', $cookie)
        ->update(['resume_data' => json_encode($data)]);

        return "save success";
    }
  }

  public function getDefault(Request $request) {

    $existing = [];

    // return array with items that are differrent from the base


    if($request->model) {
      $baseModel = $this->baseModel['model'];

      foreach ($request->model as $key => $section)  {
        $existing[$key] = array_map( 'unserialize', array_diff_assoc( array_map( 'serialize', $section), array_map( 'serialize', $baseModel[$key]) ));
      }
    }


    $defaults = [
      'intro' => [
        'introStyle' => 'standard',
        'personal' => ["making a mess in the kitchen", "pooping in the woods", "watching cartoons", "learning new skills (that killz)", "playing tennis"],
      ],
      'portrait' => [
        'facialHair' => 'scruff',
        'attire' => 'casual',
        'expression' => 'smile-2',
        'background' => 'white',
      ],
      'portraitUrls' => [
        'lg' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-e5bc3456ca38304630f4d3bc1850b991-xl.jpg",
        'md' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-e5bc3456ca38304630f4d3bc1850b991-md.jpg",
        'xs' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-e5bc3456ca38304630f4d3bc1850b991-xs.jpg"
      ]
    ];

    // override base object with default options
    foreach( $defaults as $key => $value ) {
      $object[$key] = array_replace( $this->baseModel['model'][$key], $value );
    }

    // override that with the existing user provided data
    foreach( $existing as $key => $value ) {
      $object[$key] = array_replace( $object[$key], $value);
    }

    return response()->json($object);
  }
}
