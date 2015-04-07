<?php
class Request {

  public static $required = array('phase', 'level', 'slide');

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

  public static function Params() {
    if (Request::Method() == 'GET') {
      return $_GET;
    } elseif (Request::Method() == 'POST') {
      return $_POST;
    }
  }

  /**
  * Check if all required params are present
  */
  public static function Validate() {
    $ret = true;
    $params = Request::Params();
    foreach (Request::$required as $required) {
      if (!array_key_exists($required, $params)) {
        $ret = false;
      }
    }
    return $ret;
  }

}

?>