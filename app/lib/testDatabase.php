<?php


/**
 * Test
 */
$pdo = new PDO('mysql:host=localhost;dbname=blog_pro_p5;charset=utf8', 'opcteacher', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res = $pdo->query('SELECT * FROM administration_user');
$datas = $res->fetchAll(PDO::FETCH_OBJ);
var_dump($datas[0]->last_name);