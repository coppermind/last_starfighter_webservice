<?php
class Form {

  public static function Debug($params) {
    if (array_key_exists('debug', $params)) {
      echo <<<EOF
<form name="" method="post">
  <input type="submit" value="Submit">
</form>
EOF;
    }
  }

}
?>