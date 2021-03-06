<?php

$routes = array(
	'apply' => $TEMPLATEDIR . 'apply.php',
	'translate' => $TEMPLATEDIR . 'translate.php',
	'credits' => $TEMPLATEDIR . 'credits.php',
	'contact' => $TEMPLATEDIR . 'contact.php',
	'privacy' => $TEMPLATEDIR . 'privacy.php',
	'review/bulkmail' => $BASEDIR . '/review/bulk_mail.php',
	'review/country/grid' => $BASEDIR . '/review/country_grid.php',
	'review/country/edit' => $BASEDIR . '/review/edit_country.php',
	'review/country' => $BASEDIR . '/review/country_grid.php',
        'review/dump' => $BASEDIR . '/review/dump.php',
	'review/edit' => $BASEDIR . '/review/edit.php',
	'review/grid' => $BASEDIR . '/review/grid.php',
	'review/grid/score' => $BASEDIR . '/review/grid_score.php',
	'review/view' => $BASEDIR . '/review/view.php',
	'review' => $BASEDIR . '/review/grid.php',
        'user/add' => $BASEDIR . '/review/add_user.php',
	'user/list' => $BASEDIR . '/review/user_grid.php',
	'user/login' => $BASEDIR . '/review/login.php',
	'user/password/reset' => $BASEDIR . '/review/user_pwreset.php',
	'user/password' => $BASEDIR . '/review/user_pwreset.php',
	'user/table' => $BASEDIR . '/review/usertable.php',
	'user/view' => $BASEDIR . '/review/view_user.php',
	'user' => $BASEDIR . '/review/login.php'
);	

$defaultRoute = $routes['apply'];
?>
