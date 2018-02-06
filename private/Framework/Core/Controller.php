<?php
namespace Framework\Core;

 abstract class Controller
{
    protected $_controller;
    protected $_action;
    protected $_params;

     public function __construct($params)
     {
         $this->_params=$params;
     }
     public function __call($name, $arguments)
     {

         if (method_exists($this, $name)) {
             if ($this->before() !== false) {
                 call_user_func_array([$this,$name], $arguments);
                 $this->after();
             }
         } else {
             throw new \Exception("Method $name not found in controller " . get_class($this));
         }

     }

   abstract  public function after();
   abstract  public function before();
}