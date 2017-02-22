<?php
class Movie_Model extends model
{
    protected static $object_class = 'Movie_Object';

    public static function getGenres()
    {
        $query = "SELECT label FROM imdb_genre";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    public static function getTopMovies()
    {
        $query = "SELECT *
        FROM `imdb_movie`
        ORDER BY `votes_nr` 
        DESC LIMIT 51";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }
    
    
    public static function getGenresForMovies()
    {
        $query = "
        SELECT *
        FROM `imdb_movie_has_genre`
        INNER JOIN `imdb_genre`
            ON `imdb_movie_has_genre`.`imdb_genre_id` = `imdb_genre`.`id`
        ";

        $stmt = db::query($query);
        $objects = static::fetchObjects($stmt);

        $movie_genres = array();
        foreach($objects as $object)       
        {
            // var_dump($object);
            /* if(!isset($genres_by_game[$object->game_id])) if an  arra of genres for this game_id does not exeist
            *  {
            *       $genres_by_game[$object->game_id] = array(); //create it with an empty array
            *  }
            *  $genres_by_game[$object->game_id] [] = $object; //we add a new item into this array
            */
            $movie_genres[$object->id][] = $object;
        }

        return $movie_genres;
    }
}