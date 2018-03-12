<?php

class SiteController
{
  public function actionIndex()
  {
    $categories = [];
    $categories = Category::getCategoriesList();

    $latestProduct = [];
    $latestProduct = Product::getLatestProducts(5);

    require_once(ROOT . '/views/site/index.php');

    return true;
  }


  public function actionContact()
  {

    // Переменные для формы
    $userEmail = '';
    $userText = '';
    $result = '';

    // Обработка формы
    if(isset($_POST['submit'])) {
      // Если форма отправлена
      // Получаем данные из формы
      $userEmail = $_POST['userEmail'];
      $userText = $_POST['userText'];

      // Флаг ошибок
      $errors = false;

      // Валидация полей
      if(!User::checkEmail($userEmail)) {
        $errors[] = 'Неправильный email';
      }

      if($errors == false) {
        // Если ошибок нет
        // Отправляем письмо администратору
        $adminEmail = 'info@webforus.ru';
        $message = "Текст: {$userText}. От {$userEmail}";
        $subject = 'Контактная форма';
        $result = mail($adminEmail, $subject, $message);
        $result = true;
      }
    }

    // Подключаем вид
    require_once(ROOT . '/views/site/contact.php');
    return true;
  }


  public function actionIndexcsite()
  {
//    $categories = array();
  }

  public function actionIndexpsite()
  {
//    $categories = array();
  }

  public function actionIndexusite()
  {
//    $categories = array();
  }
}