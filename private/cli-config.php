<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 31/01/18
 * Time: 07:39 م
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Framework\Bootstrap;

require_once 'vendor/autoload.php';

$entityManager = Bootstrap::getInstance()->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);