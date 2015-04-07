<?php
class Slides {

  public function Slide_1() {
    $text = <<<EOF
(DIALOGUE GOES HERE)
EOF;
    return array(
      'speaker' => 'player',
      'dialogue' => $text,
    );
  }
}
?>