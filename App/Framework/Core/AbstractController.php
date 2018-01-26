<?php
namespace PHPMVC\Controllers;

abstract class AbstractController
{
    protected $_controller;
    protected $_action;
    protected $_params;

    protected $_data = [];

    public function notFoundAction()
    {
        $this->_view();
    }


    public function setController ($controllerName)
    {
        $this->_controller = $controllerName;
    }

    public function setAction ($actionName)
    {
        $this->_action = $actionName;
    }

    public function setTemplate($template)
    {
        $this->_template = $template;
    }

    public function setRegistry($registry)
    {
        $this->_registry = $registry;
    }

    public function setParams ($params)
    {
        $this->_params = $params;
    }

    protected function _view()
    {
        $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
        if($this->_action == FrontController::NOT_FOUND_ACTION || !file_exists($view)) {
            $view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        }
        require_once $view;
    }

}