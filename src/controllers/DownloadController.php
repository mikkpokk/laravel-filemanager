<?php

namespace IntEServices\Laravelfilemanager\controllers;

/**
 * Class DownloadController
 * @package IntEServices\Laravelfilemanager\controllers
 */
class DownloadController extends LfmController
{
    /**
     * Download a file
     *
     * @return mixed
     */
    public function getDownload()
    {
        return response()->download(parent::getCurrentPath(request('file')));
    }
}
