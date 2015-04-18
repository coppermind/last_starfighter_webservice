<?php
class Slides {

  public function Slide_1() {
    $text = <<<EOF
(SLIDE 1 DIALOGUE GOES HERE)
EOF;
    return array(
      'speaker' => 'player',
      'dialogue' => $text,
    );
  }

  public function Slide_2() {
    $text = <<<EOF
(SLIDE 2 DIALOGUE GOES HERE)
EOF;
    return array(
      'speaker' => 'player',
      'dialogue' => $text,
    );
  }
}
?>