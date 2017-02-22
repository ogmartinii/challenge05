<?php
class Actor_Model extends model
{
    public static function getActors()
    {
        $query = "SELECT label FROM imdb_genre";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }
}