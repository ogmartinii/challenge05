<?php
// genres section
$topmovies = new view('movie/topmovies');
$topmovies->topmovies = Movie_Model::getTopMovies();


// page layout
$page_layout = new view('movie/page_layout');
$page_layout->topmovies = $topmovies;


// set thte title of the page
presenter::setTitle('Movie');

// give the layout to the presenter to present
presenter::present($page_layout);