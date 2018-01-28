<?php


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


    /**
     * Database  host name
     * @var string
     **/
    const DATABASE_HOST_NAME = "localhost";

    /**
     * Database db name
     * @var string
     **/

    const DATABASE_DB_NAME = "test";

    /**
     * Database user name
     * @var string
     **/

    const DATABASE_USER_NAME = "root";

    /**
     * Database password
     * @var string
     **/

    const DATABASE_PASSWORD = "";

    /**
     * Database driver
     * @var string
     **/
    const DATABASE_DRIVER = "PDO";

}
