<?php
/**
 * Story web service for last starfighter Unity game.
 * Prints out plain text dialogue slide.
 *
 * Required parameters: phase, level, slide
 */

include 'lib/_lib.php';

class Index {

  public static function Init() {
    if (Request::Method() == 'GET') {
      Request::Head(400);
    } else {
      $params = Request::Params();
      if (Index::ValidateRequest($params)) {
        Index::ProcessRequest($params);
      } else {
        Request::Head(400);
      }
    }
  }

  public static function ProcessRequest($params) {
    $request = new Story($params);
    $request->RetrieveData();
  }

  /**
  * Check if all required params are present
  */
  public static function ValidateRequest($params) {
    $ret = true;
    foreach (Request::RequiredParams() as $required) {
      if (!in_array($required, $params)) {
        $ret = false;
      }
    }

    return $ret;
  }
}

Index::Init();
?>