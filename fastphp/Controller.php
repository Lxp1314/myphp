<?php
/**
 * Created by PhpStorm.
 * User: wuyun
 * Date: 2019/1/16
 * Time: 16:38
 */

class Controller
{
    protected $_controller;
    protected $_action;
    protected $_view;

    public function __construct($controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_view = new View($controller, $action);
    }

    public function assign($name, $value){
        $this->_view->assign($name, $value);
    }

    public function render(){
        $this->_view->render();
    }
}