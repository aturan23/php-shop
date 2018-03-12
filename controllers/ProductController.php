<?php

class ProductController
{
  public function actionView($productID)
  {
    $categories = [];
    $categories = Category::getCategoriesList();

    $product = Product::getProductById($productID);

    require_once(ROOT . '/views/product/view.php');
    return true;
  }
  public function actionComment() {
    if($_POST['submit']) {
      $connect = Db::getConnection();
      $sql = 'INSERT INTO reviews '
        . '(uname, r_txt)'
        . 'VALUES '
        . '(:uname, :r_txt)';
      $result = $connect->prepare($sql);
      $result->bindParam(':uname', $_SESSION['user'], PDO::PARAM_STR);
      $result->bindParam(':r_txt', $_POST['comment'], PDO::PARAM_STR);
      $result->execute();
      exit('Отзыв отправлен');
    } else {
      exit('comment no');
    }
  }
}