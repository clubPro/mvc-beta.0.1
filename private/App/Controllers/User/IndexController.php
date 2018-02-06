<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 29/01/18
 * Time: 11:38 ص
 */

namespace App\Controllers\User;

use App\Models\User;
use Framework\Bootstrap;
use Framework\Core\Controller;
use Framework\Core\View;

class IndexController extends Controller
{
    public function IndexAction(){
 var_dump($_POST);

        //View::renderTemplate("User/index.html");

        $User = new User();
        $User->setUserName("elhabib");
        $User->setPassWordHash("kaka197");
        $User->setState(true);
        $User->setEmail("motamayze@gamil.com");

        $entityManager = Bootstrap::getInstance()->getEntityManager();
        $entityManager->persist($User);
        $entityManager->flush();

      var_dump(
          $entityManager->getRepository(get_class(new User()))->findOneBy(
          [
              "PassWord_hash"=>$User->getPassWordHash(),
              "UserName"=>$User->getUserName()
      ]));
        }

    public function after()
    {
        // TODO: Implement after() method.
    }

    public function before()
    {
        // TODO: Implement before() method.
    }
}