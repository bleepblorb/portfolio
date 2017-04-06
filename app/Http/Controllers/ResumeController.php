<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //

  protected $baseModel = [
    'intro' => [
      'introStyle' => '',
      'personal' => [],
      'togglerPoem' => 0,
      'togglerIntro' => 0,
    ],
    'portrait' => [
      'expression' => 'normal',
      'facialHair' => '',
      'hair' => 'default',
      'background' => '',
      'attire' => '',
      'hands' => '',
    ]
  ];

  // Get fresh Resume object
  public function getFresh() {
    return response()->json($this->baseModel);
  }

  public function getDefault(Request $request) {

    $existing = [];

    // return array with items that are differrent from the base
    if($request->model) {
      foreach ($request->model as $key => $section)  {
        $existing[$key] = array_map( 'unserialize', array_diff_assoc( array_map( 'serialize', $section), array_map( 'serialize', $this->baseModel[$key]) ));
      }
    }
    else {

    }

    $defaults = [
      'intro' => [
        'introStyle' => 'standard',
        'personal' => ["making a mess in the kitchen", "pooping in the woods", "watching cartoons", "learning new skills (that killz)", "playing tennis"],
      ],
      'portrait' => [
        'facialHair' => 'beard',
        'background' => 'white'
      ]
    ];

    // $object = array_replace_recursive($this->baseModel, $defaults);
    // $object = array_replace_recursive($object, $existing);
    foreach( $defaults as $key => $value ) {
      $object[$key] = array_replace( $this->baseModel[$key], $value );
    }

    foreach( $existing as $key => $value ) {
      $object[$key] = array_replace( $object[$key], $value);
    }

    return response()->json($object);
  }
}
