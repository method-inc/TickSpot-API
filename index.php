<?php 	set_time_limit(0);
		require_once('config.php');
		if(defined('DB_SERVER' && 'DB_USER' && 'DB_PASS'  &&  'DB_NAME')){
			//Include nessary files for accessing your ORM library for accessing your database
			require_once('models/database_object.php');
			require_once('models/database.php');
			require_once('models/clients.php');
			require_once('models/entries.php');
			require_once('models/projects.php');
			require_once('models/tasks.php');
			require_once('models/users.php');	}		
		require_once('functions/functions.php');
		require_once('functions/tickspot.php');
		require_once('functions/load.php'); ?>


<?php 

/*
$u = tickspot::get('users');
echo $u;
*/

/*
$g = tickspot::get('projects');
echo $g;
*/

/*
$d = tickspot::delete_all_projects();
echo $d;
*/

/*
$p = tickspot::add_all_projects();
echo $p
*/

/*
$e = tickspot::add_all_entries();
echo $e
*/

/*
$c = tickspot::close_all_projects();
echo $c
*/

/*
$o = tickspot::open_all_projects();
echo $o
*/

?>