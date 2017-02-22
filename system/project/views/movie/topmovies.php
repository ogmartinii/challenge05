<div class="top_movies">
<div class="content_bg"></div>
<h1>TOP 51 MOVIES</h1>
<ol>
<?php foreach($topmovies as $topmovie) : ?>
    <li>    
        <h2><?php echo $topmovie->name; ?></h2>
        <h3><?php echo $topmovie->year; ?></h3>
    </li>
<?php endforeach; ?>

</ol>
</div>