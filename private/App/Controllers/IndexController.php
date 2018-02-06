<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 27/01/18
 * Time: 12:04 ص
 */
namespace App\Controllers;


use App\Models\User;
use Framework\Bootstrap;
use Framework\Core\Controller;
use Framework\Core\View;

class IndexController extends Controller
{
 public function IndexAction(){
/*
     $entityManager = Bootstrap::getInstance()->getEntityManager();
     $user = $entityManager->getRepository(get_class(new User()))->find(14);
     $user->setRole("user");
     $entityManager->persist($user);
     $user2 = $entityManager->getRepository(get_class(new User()))->find(15);
     $user2->setRole("user");
     $entityManager->persist($user2);
     $entityManager->flush();*/
     //$admin = new User();
     //$admin->setFirstname("First");
    // $admin->setLastname("LAST");
     //$admin->setRole("admin");

// Gestion de la persistance
     //$entityManager->persist($admin);
     //$entityManager->flush();
     //echo $admin->getId();

   View::renderTemplate("index.html" ,[
         "post"=> "it is page true only"
     ]
     );
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