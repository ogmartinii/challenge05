<?php
// actors section
$actors = new view('home/actors');
$movies = new view('home/movies');

// page layout
$page_layout= new view('home/page_layout');
$page_layout->actors = $actors;
$page_layout->movies = $movies;

// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);