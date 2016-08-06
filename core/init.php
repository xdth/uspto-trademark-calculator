<?php

/*
* Init file
*/

// Include main class
require_once('core/main.class.php');

// Instantiate main class
$main = new Main();

// Get registration date
if(isset($_GET['regdate'])){
  $main->regdate($_GET['regdate']);
}

// Post registration date
if (isset($_POST['submit'])) {
  $arg = array($_POST['year'],$_POST['month'],$_POST['day']);
  $imploded = implode('-',$arg);
  header("Location: ./?regdate=".$imploded);
}
