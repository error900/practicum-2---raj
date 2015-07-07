<?php
/*
app/controller/FeatureController.php
*/
use MrJuliuss\Syntara\Controllers\BaseController;

class FeatureController extends BaseController
{
    public function getIndex()
    {
        $this->layout = View::make('index');
        $this->layout->title = 'Dashboard';

        // add breadcrumb to current page
        $this->layout->breadcrumb = array(
            array(
                'title' => 'Dashboard',
                'link' => 'dashboard',
                'icon' => 'fa fa-tachometer'
            )
        );

    }

}

