<?php
require 'form.php';

$form = new Form($_POST);

/*** 
 var_dump($form);
 die(); 
***/
?>


<form action="#" method="post">
	<?php
	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit();
	?>
</form>