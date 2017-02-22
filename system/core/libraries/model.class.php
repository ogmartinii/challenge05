<?php 

class model
{
    protected static $object_class = 'stdClass';

    // fetch objects from statement
    public static function fetchObjects($statement)
    {
        $statement->setFetchMode(PDO::FETCH_CLASS, static::$object_class);

        return $statement->fetchAll();
    }

}

