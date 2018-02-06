<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 31/01/18
 * Time: 06:07 م
 */

namespace Framework;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Framework\Core\Config;

class Bootstrap
{
    private $entitiesPath=["/opt/lampp/htdocs/mvc-beta.0.1/private/App/Models"];
    private static $instance;
    private $entityManager;
    private $isDevMode = "true";
    private $proxyDir = null;
    private $cache = null;
    private $useSimpleAnnotationReader = "false";

    private function __clone()
    {
    }

    private function __construct()
    {
        $config = Setup::createAnnotationMetadataConfiguration(
            $this->entitiesPath,
            $this->isDevMode,
            $this->proxyDir,
            $this->cache,
            $this->useSimpleAnnotationReader
        );

        $this->entityManager = EntityManager::create(Config::DATABASE_PARAMS, $config);

    }

    public static function getInstance()
    {

        if (self::$instance == null) self::$instance = new Bootstrap();
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

}