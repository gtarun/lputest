shardendu
why is it not working 
<?php
	exec('git',$out);
	print_r($out);
	exec('git pull',$out);
	print_r($out);

 die('changes') ?>