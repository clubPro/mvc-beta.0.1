<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 29/01/18
 * Time: 11:38 ص
 */

namespace App\Controllers\Admin;

use Framework\Core\Controller;

class IndexController extends Controller
{
    public function IndexAction(){
        echo "<h1 style='text-align: center ; color: #dd4444; size: 80px'>admin page is test  now </h1>";
    }
}