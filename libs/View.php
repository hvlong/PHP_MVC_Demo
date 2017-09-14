<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 9/14/2017
 * Time: 3:54 PM
 */
class View {

    function __construct()
    {
        echo 'This is a view';
    }

    public function render($name)
    {
        require 'views/' .$name . '.php';
    }

}