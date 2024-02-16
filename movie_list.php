<?php foreach ($movies as $movie): ?>
    <?php $movieData = $movie->toArray(); ?>
    <div>
        <strong><?= $movie->get_title(); ?></strong>:
        <?= implode(', ', $movieData); ?>
    </div>
<?php endforeach; ?>


