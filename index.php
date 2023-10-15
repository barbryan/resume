<?php

session_start();

include('./pages/page.php');
//include('./includes/autoload.php');

$url = explode("/", (string) $_SERVER['REQUEST_URI']);

if (empty($url[1])) {
  header('location: /applicants');
  exit();
}
if ($url[1] == "error") {
  include('./error.php');
  exit();
}

new Page($url);

