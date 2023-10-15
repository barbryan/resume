<?php
use models\ApplicantModel;

// namespace Controllers;

class Login
{
  private $type;

  // public function __construct() {
  //   if ($_SESSION['type'] == "ADMIN") {
  //     include('./pages/nav.php');
  //   }
  // }

  public static function index()
  {
    include('./models/applicant.model.php');
    $model = new ApplicantModel();
    // $content = include('./pages/auth/login.php');
    include('./pages/auth/_layout.php');
  }

}
