<?php
class ErrorNew extends Controller {

    function __construct()
    {
        parent::__construct();
        echo 'This is error';

        $this->view->msg = 'Page isnot found';
        $this->view->render('error/index');
    }
}