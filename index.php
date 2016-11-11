<?php

define('BASE_DIR', getcwd());

//echo basename ('index.php');
$data = file_get_contents('text.txt');
$put = file_put_contents('file.txt', $data);

return $put;
// $var = $_SERVER;

// foreach ($_SERVER as $key => $value) {
//    	echo $key.' ______________ '.$value.'<br /><br/>';
//    }  ;

exit;
//echo (BASE_DIR);


// Start the fun

require 'framework/core/bootstrap.php';

$app = new HowdyEngine(require($settings.php));

