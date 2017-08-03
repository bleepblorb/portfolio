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
      'tour' => [
        'value' => '',
      ],
      'about' => [
        'introStyle' => '',
        'personal' => [],
        'togglerPoem' => [
          'index' => 0,
          'options' => [
            'oh yeah',
            'why not',
            'uh, meh',
            'no way'
          ]
        ],
        'togglerIntro' => [
          'index' => 0,
          'value' => '',
          'options' => [
            'create things with value',
            'make cool shit',
          ],
        ],
        'togglerElevator' => [
          'index' => 0,
          'options' => [
            'dribble, but with less drop shadows',
            'Squarespace, but with fewer promo codes',
            '99Designs, but not terrible',
            'Fiverr, but much more expensive for some reason',
          ],
        ],
        'manifesto' => [],
      ],
      'portrait' => [
        'expression' => 'neutral',
        'facialHair' => '',
        'hair' => 'standard',
        'background' => '',
        'attire' => 'base',
        'hands' => '',
        'filter' => '',
      ],
      'portraitUrls' => [
        'lg' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-base-xl.jpg",
        'md' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-base-md.jpg",
        'xs' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-base-xs.jpg"
      ],
      'experience' => [
        'past' => '',
        'skills' => [],
      ]
    ],
    'state' => [
      'currentStep' => -1,
      'currentPhase'=> 'welcome',
      'furthestAllowed' => 0,
      'completedSteps' => 0,
      'completedPhases' => -1,
      'isComplete' => false,
      'editMode' => false,
      'previewMode' => false,
      'readerMode' => false,
      'tourComplete' => false,
    ]
  ];

  protected function createCookie($id = false) {
    $name = "resume_data";
    $minutes = 1440 * 30; // 30 days
    $key = $id;
    $data = json_encode($this->baseModel);

    if( !$key ) {
      $key = Uuid::generate()->string;
      // Generate Database storage for user
      DB::table('user_cookies')->insert([
        'id' => $key,
        'resume_data' => $data,
        'last_visited' => Carbon::now(),
      ]);
    }

    return cookie($name, $key , $minutes);
  }

  // Get fresh Resume object
  public function getFresh(Request $request) {

    $cookie = $request->cookie('resume_data');

    if ( $cookie ) {
      $data = DB::table('user_cookies')
        ->where('id', '=', $cookie)
        ->update(['resume_data' => json_encode($this->baseModel)]);

      // does not exist in database, generate new cookie
      if ( !$data ) {
        $cookie = $this->createCookie();
      }
    }
    else {
      $cookie = $this->createCookie();
    }

    return response()->json($this->baseModel)->cookie($cookie);
  }

  public function open(Request $request) {
    // Generate Database storage for user

    $cookie = $request->cookie('resume_data');

    if ( $cookie ) {

      $data = DB::table('user_cookies')
        ->where('id', '=', $cookie)
        ->value('resume_data');

      if( $data ) {
        DB::table('user_cookies')
          ->where('id', '=', $cookie)
          ->update(['last_visited' => Carbon::now()]);

        return response()->json(json_decode($data))->cookie($this->createCookie($cookie));
      }
      else {
        return response()->json(['error' => 'No saved file found'], 412);
      }

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
      'tour' => [
        'value' => ''
      ],
      'about' => [
        'introStyle' => 'standard',
        'personal' => ['cooking', 'tennis', 'hiking', 'learn', 'crafts', 'television'],
        'manifesto' => [
          'craft', 'balance', 'enjoy', 'grow', 'climb', 'beyond', 'care', 'purpose'
        ]
      ],
      'portrait' => [
        'facialHair' => 'scruff',
        'attire' => 'casual',
        'expression' => 'smile-2',
        'background' => 'white',
        'filter' => 'nada',
      ],
      'portraitUrls' => [
        'lg' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-e5bc3456ca38304630f4d3bc1850b991-xl.jpg",
        'md' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-e5bc3456ca38304630f4d3bc1850b991-md.jpg",
        'xs' => "https://s3-us-west-2.amazonaws.com/well-done/public/portrait/portrait-e5bc3456ca38304630f4d3bc1850b991-xs.jpg"
      ],
      'experience' => [
        'past' => 'detail',
        'skills' => ['print', 'digital', 'development', 'other']
      ]
    ];

    $object = [];

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
