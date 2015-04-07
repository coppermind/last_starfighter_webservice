<?php
class Debug {

  public static function Inspect($var, $label = '') {
    echo "<pre>{$label}";
    print_r($var);
    echo "</pre>";
  }

  public static function Form($params) {
    if (array_key_exists('debug', $params)) {
      echo <<<EOF
<!DOCTYPE html>
<html>
<head>
  <title>Last Starfighter Debug Form</title>
  <style type="text/css">
    span {
      display: block;
      float: left;
      width: 70px;
    }
    div {
      height: 24px;
    }
    input {
      width: 70px;
    }
  </style>
</head>
<body>
  <form name="" method="post">
    <input type="hidden" name="debug" value="">
    <strong>Debug Form</strong>
    <hr>
    <div>
      <span>Phase:</span>
      <input type="text" name="phase">
    </div>
    <div>
      <span>Level:</span>
      <input type="text" name="level">
    </div>
    <div>
      <span>Slide:</span>
      <input type="text" name="slide">
    </div>
    <hr>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
EOF;
    }
  }

}
?>