<?php
namespace App\Vendor\Models;

use App\Framework\Core\Model;

class TestModel extends Model
{


    protected static $tableName = 'users';

    protected static $tableSchema = array(
        'user'              => self::DATA_TYPE_STR,
        'pass'       => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'id';
}