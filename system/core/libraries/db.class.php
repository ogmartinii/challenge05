<?php

/*
* allows us to run sql queries, handling a queries
* provides functionality to connect to a database
* it will use information from config
*/
class db
{
    // connection to the database (object of class PDO)
    protected static $pdo = null;

    // will return connection object
    public static function pdo()
    {
    // if static::$pdo was not yet created (ie. connected to the db)
    if(static::$pdo===null) {

      // connect to the database
      // store the connection (PDO) into static::$pdo
      try {
        static::$pdo = new PDO(
          'mysql:dbname='.config::get('db_name').';host='.config::get('db_host').';charset='.config::get('db_encoding', 'utf8'), //'mysql:dbname=database_name;host=locahost;charset=utf8',
          config::get('db_user'),
          config::get('db_pass')
        );

        // level of error reporting
        static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
          echo 'Connection failed: ' . $e->getMessage(); // prints out error if connection fails
      }
    }

    return static::$pdo;
    }

    // run a  SQL query
    public static function query($sql, $substitutions = array())
    {
        // get PDO object
        $pdo = static::pdo();

        // prepare the statement out of SQL
        $statement = $pdo->prepare($sql);

        $statement->execute($substitutions);

        return $statement;
    }
}