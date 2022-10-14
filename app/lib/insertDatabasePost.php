<?php
$pdo = new PDO('mysql:host=localhost;dbname=blog_pro_p5;charset=utf8', 'opcteacher', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * insert administration user
 */
/*$count = $pdo->exec('INSERT INTO administration_user SET last_name="Leponge", first_name="Bob", mail="bob@gmail.com", password="root"');
*/
/*$count = $pdo->exec("INSERT INTO administration_user (idAdministrationUser, last_name, first_name, mail, password)
values 
('4', 'Jfk', 'Doe', 'perdu-dans-lespace@yahoo.com', 'azertyrazerty'),
('5', 'Francois', 'Claude', 'zzziiii@yahoo.fr', '@electricien@');");
var_dump($count);*/

/**
 * insert post
 */
/*$count = $pdo->exec('INSERT INTO posts (idpost, administration_user_idAdministrationUser, title, caption, content_post, date_last_upload)
values 
("1", "4", "Back Versus Front", "Back ou Front les meilleurs offres", "Blablabla bla bla", "' . date('Y-m-d H:i:s') . '"),
("5", "1", "Des Developpers sur Mars", "Un petit voyage sur Mars bientot pour les developpers", "Blablabla bla bla", "' . date('Y-m-d H:i:s') . '");');
var_dump($count);*/

/*$count = $pdo->exec("INSERT INTO nave_user (idNaveUser, last_name, first_name, mail)
values 
('1', 'Jane', 'Doe', 'espace@google.com'),
('2', 'Francoise', 'Claudia', 'chiffer@yahoo.fr');");*/

$count = $pdo->exec('INSERT INTO comments (idcomment, nave_user_idNaveUser, administration_user_idAdministrationUser, title, content_comment, date_publication, post_idpost)
values 
("1", "2", "3", "trop bien", "Ouahaou Blablabla bla bla", "' . date('Y-m-d') . '", "1"),
("2", "1", "1", "Sur Mars?", "Carrément un petit voyage sur Mars bientot pour les developpers Blablabla bla bla", "' . date('Y-m-d') . '", "5");');

var_dump($count);



