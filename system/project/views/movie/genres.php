<div class="genre-list">
    <ul>
        <?php foreach($genres as $genre) : ?>
            <li>
                <a href="">  
                <?php echo $genre->label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>