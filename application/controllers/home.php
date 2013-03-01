<?php

class Home_Controller extends Base_Controller
{

    public $layout = "layouts.default";

    public function action_index()
    {
        $this->layout->title = 'Home';
        $this->layout->bodyclass = 'home';
        $this->layout->nest('content', "home.default");
    }

}