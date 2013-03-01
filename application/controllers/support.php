<?php

class Support_Controller extends Base_Controller
{

    public $layout = "layouts.default";

    public function action_index()
    {
        $this->layout->title = 'Support';
        $this->layout->bodyclass = 'support';
        $this->layout->nest('content', "support.default");
    }

}