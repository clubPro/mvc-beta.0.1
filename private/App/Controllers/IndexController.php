<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 27/01/18
 * Time: 12:04 ص
 */
namespace App\Controllers;


use Framework\Core\Controller;
use Framework\Core\View;

class IndexController extends Controller
{
 public function IndexAction(){

     View::renderTemplate("index.html" ,[
         "post"=> "it is page tru only"
     ]
     );
 }
}