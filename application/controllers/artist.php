<?php

class Artist_Controller extends Base_Controller
{
    public $layout = "layouts.default";

    public function action_show($name="foo")
    {
      $names = array (
          'bruce-mutard' => 'Bruce Mutard',
          'mirranda-burton' => 'Mirranda Burton',
          'scarlette-baccini' => 'Scarlette Baccini',
          'pat-alexander' => 'Patrick Alexander',
          'gregory-mackay' => 'Gregory Mackay',
          'marijka-gooding' => 'Marijka Gooding',
          'dan-hayward' => 'Dan Hayward',
      );

      if (!empty($names[$name]))
      {
          $this->layout->title = $names[$name];
          $this->layout->bodyclass = $name;
          $this->layout->nest('content', "artist.$name");
          //return View::make("artist.$name");
      }else
      {
        return Response::error('404');
      }
    }

}