shardendu
why is it not working 
check log now
<?php
	echo '<pre>';
	exec('git',$out);
	print_r($out);
	exec('git pull',$out);
	print_r($out);

 die('changes') ?>