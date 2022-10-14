<?php
use App\Model\Post\Post;
use App\Model\Comment\Comment;
use App\Lib\App\App;

App::setTitle($post->title);

/* on fait d'abord un 'preprare' de la requête sql pour éviter les injections */
$post = App::getDb()->prepare('SELECT * FROM posts WHERE idpost =?', [$_GET['id']], 'App\Model\Post\Post', true);


?>

<h1><?= $post->title; ?></h1>

<h3><?= $post->caption; ?></h3>

<p><?= $post->content_post; ?></p>

<p><strong>Article écrit le :</strong> <?= $post->date_last_upload; ?></p>


<div class="row">
    <div class="col-sm-8">

<?php

$keyPost = $post->idpost;

foreach(Comment::All()  as $keyPost => $comment): ?>


<h2><?= $comment->title; ?></h2>

<p><?= $comment->last_name; ?> <?= $comment->first_name; ?></p>

<p><?= $comment->content_comment; ?></p>

<p><?= $comment->date_publication; ?></p>

<?php endforeach; ?>

    </div>
</div>