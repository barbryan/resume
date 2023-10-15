<?php
use models\ApplicantModel;

// namespace Controllers;

class Account
{

  public static function index()
  {
    include('./models/applicant.model.php');
    $model = new ApplicantModel();
    $content = include('./pages/accounts/all.php');
    include('./pages/accounts/_layout.php');
  }

  public static function create() {
    include('./models/applicant.model.php');
    $model = new ApplicantModel();
    $content = include('./pages/accounts/create.php');
    include('./pages/accounts/_layout.php');
  }

  public static function update($id) {
    include('./models/applicant.model.php');
    $model = new ApplicantModel();
    $content = include('./pages/accounts/create.php');
    include('./pages/accounts/_layout.php');
  }

  public static function delete($id) {
    include('./models/applicant.model.php');
    $model = new ApplicantModel();
    $content = include('./pages/accounts/create.php');
    include('./pages/accounts/_layout.php');
  }
}
