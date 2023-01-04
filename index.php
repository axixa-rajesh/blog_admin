<?php
//ek comment
require_once "apps/libs/Session.php";
Session::init();
$allfiles = glob("helper/*.php");
array_map(fn ($fl) => require_once($fl), $allfiles);
spl_autoload_register(fn ($clname) => (file_exists("apps/libs/$clname.php")) ? require_once "apps/libs/$clname.php" : '');
include "apps/libs/Loader.php";
include "apps/libs/Controller.php";
include "apps/libs/View.php";
//this is change by main branch
$lobj = new Loader();
