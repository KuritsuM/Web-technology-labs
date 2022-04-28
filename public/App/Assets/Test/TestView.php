<?php

namespace App\Assets\Test;

use Core\View;

class TestView extends View
{
    private $viewName;
    private $data;

    public function __construct($v = null, $d = null)
    {
        $this->viewName = $v;
        $this->data = $d;
    }

    public function getView($viewName = null, $data = null)
    {
        parent::addCss('Test/Stylesheet.php');
        parent::getView($this->viewName, $this->data); // TODO: Change the autogenerated stub
        return '';
    }
}
