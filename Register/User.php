<?php declare(strict_types=1);

class User {

  protected $email, $password;

  public function validateEmail($email)
  {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) return $email;
      echo "Invalid Email \n";
      exit();
  }

  public function validatePassword($password)
  {
    if(is_str($password) && isset($password) && strlen($password)==8) return $password;
      echo "Invalid password must contain eight characters \n";
      exit();
  }

  public function __construct($email, $password)
  {

    $this->email = $email;
    $this->password = $password;
  }
}