<?php


$info = new view('actor/info');



$page_layout = new view('actor/page_layout');
$page_layout->info = $info;


presenter::setTitle('Actor page');
presenter::present($page_layout);