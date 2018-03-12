<?php
class CabinetController
{
  public function actionIndex()
  {
    $userID = User::checkLogged();

    $user = User::getUserById($userID);
    require_once(ROOT . '/views/cabinet/index.php');

    return true;
  }
  public function actionEdit()
  {
    $userID = User::checkLogged();
    $user = User::getUserById($userID);
    $name = $user['username'];
    $s_name = $user['s_name'];
    $pass = $user['password'];

    $result = false;
    if(isset($_POST['submit']))
    {
      $name = $_POST['name'];
      $s_name = $_POST['s_name'];
      $pass = $_POST['password'];
      $errors = false;
      if(!User::checkName($name))
      {
        $errors[] = "Имя неправильно";
      }
      if(!User::checkName($s_name))
      {
        $errors[] = "Фамилия неправильно";
      }
      if(!User::checkPassword($pass))
      {
        $errors[] = "Пароль неправильно";
      }
      if($errors == false)
      {
        $result = User::edit($userID, $name, $s_name, $pass);
      }
    }

    require_once(ROOT . '/views/cabinet/edit.php');

    return true;
  }
}