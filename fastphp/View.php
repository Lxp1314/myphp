<?php
/**
 * Created by PhpStorm.
 * User: wuyun
 * Date: 2019/1/16
 * Time: 16:42
 */

class View
{
    protected $variables = [];
    protected $_controller;
    protected $_action;

    function __construct($controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
    }

    public function assign($name, $value){
        $this->variables[$name] = $value;
    }

    public function render(){
        
    }
}