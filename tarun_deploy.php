shardendu its working now

<?php

echo gethostname();
	echo '<pre>';
	exec('script.bat',$out);
	print_r($out);die;
	exec('cd c:\Website\lputest && git remote -v && git pull origin test',$out);
	print_r($out);

 die('changes') ?>