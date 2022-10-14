<?php

namespace Views\Templates\Posts;


?>
<div class="row">
    <div class="col-sm-8">

<?php
foreach($posts as $post): ?>


<?php /*var_dump($post); */?>

<h2><a href="<?= $post->url?>"><?= $post->title; ?></a></h2>

<h3><?= $post->caption; ?></h3>

<p><?= $post->excerpt; ?></p>

<?php endforeach; ?>

    </div>
</div>




