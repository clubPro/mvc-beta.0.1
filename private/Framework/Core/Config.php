<?php

namespace Framework\Core;

class Config
{
    /**
     * Directory separator
     * @var string
     **/
    const  DR = DIRECTORY_SEPARATOR;

    /**
     * Directory separator
     * @var string
     **/
    const APP = __DIR__ . DR . ".." . DR . "..";

   const  DATABASE_PARAMS = [
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'charset'  => 'utf8',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'test',

];

    /**
     * SHOW ERRORS
     * @var string
     **/
    const  SHOW_ERRORS = false;
    /**
     * SHOW ERRORS
     * @var string
     **/
    const  CTYPT_SALT = "MVC@22164642//1997";

    /**
     * LANGUAGE SPORTED
     * @var array
     **/
    const  LANGUAGE_SPORTED = ["ar","en","fr","ru"];


    /**
     * LANGUAGE DEFAULT
     * @var string
     **/
    const  LANGUAGE_DEFAULT="ar";
}
