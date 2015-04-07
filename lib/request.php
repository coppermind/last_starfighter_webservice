<?php
class Request {

  public static function Method() {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function Head($code) {
    $header = '';
    switch ($code) {
      case 400:
        $header = '400 Bad Request';
        break;
    }
    header("{$_SERVER['SERVER_PROTOCOL']} {$header}", true, $code);
    echo $header;
  }

  public static function Redirect($uri) {
    header("redirect: {$uri}");
  }

  public static function RequiredParams() {
    return array(
      'phase', 'level', 'slide'
    );
  }

  public static function Params() {
    if (Request::Method() == 'GET') {
      return $_GET;
    } elseif (Request::Method() == 'POST') {
      return $_POST;
    }
  }

}

?>