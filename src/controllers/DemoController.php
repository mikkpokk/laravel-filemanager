<?php

namespace IntEServices\Laravelfilemanager\controllers;

/**
 * Class DemoController
 * @package IntEServices\Laravelfilemanager\controllers
 */
class DemoController extends LfmController
{

    /**
     * @return mixed
     */
    public function index()
    {
        return view('laravel-filemanager::demo');
    }
}
