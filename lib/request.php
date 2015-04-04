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
        exit(0);
        break;
    }
    header("{$_SERVER[SERVER_PROTOCOL]} {$header}", true, $code);
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
    if (self::Method() == 'GET') {
      return $_GET;
    } elseif (self::Method() == 'POST') {
      return $_POST;}
    }
  }

}

?>