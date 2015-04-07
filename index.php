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
    $params = Request::Params();
    if (Request::Method() == 'GET') {
      Request::Head(400);
    } else {
      if (Request::Validate()) {
        Index::Run($params);
      } else {
        Request::Head(400);
      }
    }
    Debug::Form($params);
  }

  public static function Run($params) {
    $request = new Story($params);
    $data = $request->RetrieveData();
    echo json_encode($data);
  }
}

Index::Init();
?>