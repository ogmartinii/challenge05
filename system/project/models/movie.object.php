<?php

class Movie_Object
{

public function getUrl()
    {
        return url::to('movie', array('id' => $this->id));
    }
}