<?php

class UserController
{
  public function actionRegister()
  {
    $categories = Category::getCategoriesList();
    $name = '';
    $s_name = '';
    $email = '';
    $pass = '';
    $result = false;

    if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $s_name = $_POST['s_name'];
      $email = $_POST['email'];
      $pass = $_POST['password'];

      $errors = false;
      if(!User::checkName($name)) {
        $errors[] = 'Имя не верно';
      }
      if(!User::checkName($s_name)) {
        $errors[] = 'Имя не верно';
      }
      if(!User::checkEmail($email)) {
        $errors[] = 'mail не верно';
      }
      if(!User::checkPassword($pass)) {
        $errors[] = 'pass не верно';
      }
      if(User::checkEmailExists($email)) {
        $errors[] = 'email suwestvuet';
      }

      if($errors == false) {
        $result = User::register($name, $s_name, $email, $pass);
        header("Location: /user/login");
      }
    }

    require_once(ROOT . '/views/user/register.php');
    return true;
  }

  public function actionLogin()
  {
    $categories = Category::getCategoriesList();
    $email = '';
    $pass = '';
    if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $pass = $_POST['password'];

      $errors = false;

      if(!User::checkEmail($email)) {
        $errors[] = 'mail не верно';
      }
      if(!User::checkPassword($pass)) {
        $errors[] = 'pass не верно';
      }

      $userID = User::checkUserData($email, $pass);

      if($userID == false) {
        $errors[] = 'Email или пароль неверны';
      } else {
        User::auth($userID);
        header("Location: /cabinet/");
      }
    }

    require_once(ROOT . '/views/user/login.php');
    return true;
  }

  public function actionLogout()
  {
    unset($_SESSION['user']);
    header("Location: /");
  }
}