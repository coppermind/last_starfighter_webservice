<?php
class Story {

  protected $params = array();

  function __construct($p) {
    $this->params = $p;
  }

  public function RetrieveData() {
    $slides_path = "data/phase_{$this->params['phase']}/level_{$this->params['level']}/slides.php";

    if (file_exists($slides_path)) {
      include $slides_path;
      $slides = new Slides();
      $slide = "Slide_{$this->params['slide']}";

      if (method_exists($slides, $slide)) {
        $data = $slides->$slide();
        return $data;
      }
    }

    Request::Head(400);
  }
}